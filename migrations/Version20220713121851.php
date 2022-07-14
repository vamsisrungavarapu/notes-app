<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220713121851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Createdd Note table and added Many To Many relationship with Tag Table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE note_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE note (id INT NOT NULL, title VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE note_tag (note_id INT NOT NULL, tag_id INT NOT NULL, PRIMARY KEY(note_id, tag_id))');
        $this->addSql('CREATE INDEX IDX_737A976326ED0855 ON note_tag (note_id)');
        $this->addSql('CREATE INDEX IDX_737A9763BAD26311 ON note_tag (tag_id)');
        $this->addSql('ALTER TABLE note_tag ADD CONSTRAINT FK_737A976326ED0855 FOREIGN KEY (note_id) REFERENCES note (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE note_tag ADD CONSTRAINT FK_737A9763BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE note_tag DROP CONSTRAINT FK_737A976326ED0855');
        $this->addSql('DROP SEQUENCE note_id_seq CASCADE');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE note_tag');
    }
}
