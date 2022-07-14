<?php

namespace App\Controller;

use App\Entity\Note;
use App\Entity\Tag;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

class NoteController extends AbstractController
{
    /**
     * @Route("/", name="display_home", methods={"GET"})
     */
    public function showAll(ManagerRegistry $doctrine): Response
    {
        /** @var Note[] $notes */
        $notes = $doctrine->getRepository(Note::class)->findAll();
        $noteArray = [];
        foreach ($notes as $note) {
            $tagArray = [];
            $tags = $note->getTags();
            foreach ($tags as $tag) {
                $tagArray[] = [
                    'id' => $tag->getId(),
                    'name' =>$tag->getName()
                ];
            }
            $noteArray[] = [
                'id' =>$note->getId(),
                'title' => $note->getTitle(),
                'desc' => $note->getDescription(),
                'tags' => $tagArray
            ];
        }

        $tags = $doctrine->getRepository(Tag::class)->findAll();
        $tagList = [];
        foreach ($tags as $tag) {
            $tagList[] = [
                'id' =>$tag->getId(),
                'name' => $tag->getName()
            ];
        }


        return $this->render('note/index.html.twig', [
            'controller_name' => 'NoteController',
            'notes' => $noteArray,
            'tags'  => $tagList
        ]);
    }

    /**
     * @Route("/notes", name="all_notes", methods={"GET"})
     */
    public function getAll(ManagerRegistry $doctrine): Response
    {
        /** @var Note[] $notes */
        $notes = $doctrine->getRepository(Note::class)->findAll();
        $noteArray = [];
        foreach ($notes as $note) {
            $tagArray = [];
            $tags = $note->getTags();
            foreach ($tags as $tag) {
                $tagArray[] = [
                    'id' => $tag->getId(),
                    'name' =>$tag->getName()
                ];
            }
            $noteArray[] = [
                'id' =>$note->getId(),
                'title' => $note->getTitle(),
                'desc' => $note->getDescription(),
                'tags' => $tagArray
            ];
        }

        return $this->json(['notes' => $noteArray]);
    }

    /**
     * @Route("/notes", name="create_note",  methods={"POST"})
     */
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        try {
            $requestBody = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
            $entityManager = $doctrine->getManager();

            $note = new Note();
            $note->setTitle($requestBody['title']);
            $note->setDescription($requestBody['desc']);
            $tags = $requestBody['tags'];
            foreach ($tags as $tag) {
                $tagObj = $entityManager->getRepository(Tag::class)->find($tag);
                $note->addTag($tagObj);
            }
            $entityManager->persist($note);
            $entityManager->flush();

            return $this->json(['id' => $note->getId()]);
        } catch (\Exception $exception) {
            return $this->json(['status' => $exception->getMessage()]);
        }
    }

    /**
     * @Route("/notes/{id}", name="update_note",  methods={"PUT"})
     */
    public function update(Note $note, Request $request, ManagerRegistry $doctrine): Response
    {
        try {
            $requestBody = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
            $entityManager = $doctrine->getManager();

            $note->setTitle($requestBody['title']);
            $note->setDescription($requestBody['desc']);
            $tags = $requestBody['tags'];
            foreach ($tags as $tag) {
                $note->addTag($tag);
            }

            $entityManager->persist($note);
            $entityManager->flush();

            return $this->json(['id' => $note->getId()]);
        } catch (\Exception $exception) {
            return $this->json(['status' => $exception->getMessage()]);
        }
    }

    /**
     * @Route("/notes/{id}", name="note_show", requirements={"id"="\d+"}, methods={"GET"})
     */
    public function showOne(Note $note): Response
    {
        return $this->render('note/single/index.html.twig', [
            'controller_name' => 'NoteController',
            'notes' => $note
        ]);
    }

    /**
     * @Route("/notes/{id}", name="delete_note",  methods={"DELETE"})
     */
    public function delete(int $id, ManagerRegistry $doctrine): Response
    {
        try {
            $em = $doctrine->getManager();
            $tag = $em->getRepository(Note::class)->find($id);
            $em->remove($tag);
            $em->flush();
            return $this->json(['id' => $id]);
        } catch (\Exception $exception) {
            return $this->json(['status' => $exception->getMessage()]);
        }
    }

}
