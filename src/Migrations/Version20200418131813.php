<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200418131813 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE form (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, page_name_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, contenu LONGTEXT DEFAULT NULL, lien VARCHAR(500) DEFAULT NULL, nomlien VARCHAR(255) DEFAULT NULL, lienmap VARCHAR(500) DEFAULT NULL, image VARCHAR(500) DEFAULT NULL, INDEX IDX_5288FD4F12469DE2 (category_id), INDEX IDX_5288FD4F8B777743 (page_name_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_name (id INT AUTO_INCREMENT NOT NULL, titre_de_la_page VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE form ADD CONSTRAINT FK_5288FD4F12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE form ADD CONSTRAINT FK_5288FD4F8B777743 FOREIGN KEY (page_name_id) REFERENCES page_name (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE form DROP FOREIGN KEY FK_5288FD4F12469DE2');
        $this->addSql('ALTER TABLE form DROP FOREIGN KEY FK_5288FD4F8B777743');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE form');
        $this->addSql('DROP TABLE page_name');
    }
}
