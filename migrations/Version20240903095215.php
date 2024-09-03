<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240903095215 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entrainement (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant_entrainement (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, entrainement_id INT DEFAULT NULL, message VARCHAR(255) NOT NULL, nombre INT NOT NULL, INDEX IDX_3F5C00B7FB88E14F (utilisateur_id), INDEX IDX_3F5C00B7A15E8FD (entrainement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participant_entrainement ADD CONSTRAINT FK_3F5C00B7FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE participant_entrainement ADD CONSTRAINT FK_3F5C00B7A15E8FD FOREIGN KEY (entrainement_id) REFERENCES entrainement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant_entrainement DROP FOREIGN KEY FK_3F5C00B7FB88E14F');
        $this->addSql('ALTER TABLE participant_entrainement DROP FOREIGN KEY FK_3F5C00B7A15E8FD');
        $this->addSql('DROP TABLE entrainement');
        $this->addSql('DROP TABLE participant_entrainement');
    }
}
