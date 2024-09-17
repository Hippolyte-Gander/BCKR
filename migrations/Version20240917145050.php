<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240917145050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image_evenement (id INT AUTO_INCREMENT NOT NULL, evenement_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, size INT NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_D3A4B34AFD02F13 (evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image_evenement ADD CONSTRAINT FK_D3A4B34AFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE participations CHANGE inscriptions_id inscriptions_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image_evenement DROP FOREIGN KEY FK_D3A4B34AFD02F13');
        $this->addSql('DROP TABLE image_evenement');
        $this->addSql('ALTER TABLE participations CHANGE inscriptions_id inscriptions_id INT NOT NULL');
    }
}
