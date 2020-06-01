<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200418112211 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE page_name (id INT AUTO_INCREMENT NOT NULL, titre_de_la_page VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_name_page_name (page_name_source INT NOT NULL, page_name_target INT NOT NULL, INDEX IDX_148D6FCA4E4EB24C (page_name_source), INDEX IDX_148D6FCA57ABE2C3 (page_name_target), PRIMARY KEY(page_name_source, page_name_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page_name_page_name ADD CONSTRAINT FK_148D6FCA4E4EB24C FOREIGN KEY (page_name_source) REFERENCES page_name (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_name_page_name ADD CONSTRAINT FK_148D6FCA57ABE2C3 FOREIGN KEY (page_name_target) REFERENCES page_name (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE page_name_page_name DROP FOREIGN KEY FK_148D6FCA4E4EB24C');
        $this->addSql('ALTER TABLE page_name_page_name DROP FOREIGN KEY FK_148D6FCA57ABE2C3');
        $this->addSql('DROP TABLE page_name');
        $this->addSql('DROP TABLE page_name_page_name');
    }
}
