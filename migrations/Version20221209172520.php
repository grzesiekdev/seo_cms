<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221209172520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE menu_pages (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, page_order INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page ADD menu_pages_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB6206C4B98B1 FOREIGN KEY (menu_pages_id) REFERENCES menu_pages (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_140AB620989D9B62 ON page (slug)');
        $this->addSql('CREATE INDEX IDX_140AB6206C4B98B1 ON page (menu_pages_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB6206C4B98B1');
        $this->addSql('DROP TABLE menu_pages');
        $this->addSql('DROP INDEX UNIQ_140AB620989D9B62 ON page');
        $this->addSql('DROP INDEX IDX_140AB6206C4B98B1 ON page');
        $this->addSql('ALTER TABLE page DROP menu_pages_id');
    }
}
