<?php

namespace App\Controller;

use App\Entity\Tag;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    /**
     * @Route("/tags", name="all_tags",  methods={"GET"})
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $tags = $doctrine->getRepository(Tag::class)->findAll();
        return $this->json(['tags' => $tags]);
    }

    /**
     * @Route("/tags", name="create_tag",  methods={"POST"})
     */
    public function create(ManagerRegistry $doctrine, Request $request): Response
    {
        try {
            $requestBody = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
            $entityManager = $doctrine->getManager();

            $tag = new Tag();
            $tag->setName($requestBody['name']);
            $entityManager->persist($tag);
            $entityManager->flush();

            return $this->json(['id' => $tag->getId()]);
        } catch (\Exception $exception) {
            return $this->json(['status' => $exception->getMessage()]);
        }
    }

    /**
     * @Route("/tags/{id}", name="delete_tag",  methods={"DELETE"})
     */
    public function delete(int $id, ManagerRegistry $doctrine): Response
    {
        try {
            $em = $doctrine->getManager();
            $tag = $em->getRepository(Tag::class)->find($id);
            $em->remove($tag);
            $em->flush();
            return $this->json(['id' => $id]);
        } catch (\Exception $exception) {
            return $this->json(['status' => $exception->getMessage()]);
        }
    }
}
