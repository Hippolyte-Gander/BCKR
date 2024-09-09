<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240909071939 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496A99F74A');
        $this->addSql('DROP INDEX UNIQ_8D93D6496A99F74A ON user');
        $this->addSql('ALTER TABLE user ADD num_licence VARCHAR(50) DEFAULT NULL, ADD nom VARCHAR(255) DEFAULT NULL, ADD prenom VARCHAR(255) DEFAULT NULL, ADD num_telephone VARCHAR(50) DEFAULT NULL, ADD date_naissance DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', ADD photo VARCHAR(255) DEFAULT NULL, ADD adresse VARCHAR(255) DEFAULT NULL, ADD ville VARCHAR(255) DEFAULT NULL, ADD cp VARCHAR(50) DEFAULT NULL, DROP membre_id, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD membre_id INT DEFAULT NULL, DROP num_licence, DROP nom, DROP prenom, DROP num_telephone, DROP date_naissance, DROP photo, DROP adresse, DROP ville, DROP cp, CHANGE roles roles JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6496A99F74A ON user (membre_id)');
    }
}
