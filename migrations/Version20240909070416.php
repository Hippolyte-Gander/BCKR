<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240909070416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496A99F74A');
        $this->addSql('CREATE TABLE entrainement (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant_entrainement (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, entrainement_id INT DEFAULT NULL, message VARCHAR(255) NOT NULL, nombre INT NOT NULL, INDEX IDX_3F5C00B7FB88E14F (utilisateur_id), INDEX IDX_3F5C00B7A15E8FD (entrainement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participant_entrainement ADD CONSTRAINT FK_3F5C00B7FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE participant_entrainement ADD CONSTRAINT FK_3F5C00B7A15E8FD FOREIGN KEY (entrainement_id) REFERENCES entrainement (id)');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP INDEX UNIQ_8D93D6496A99F74A ON user');
        $this->addSql('ALTER TABLE user ADD num_licence VARCHAR(50) DEFAULT NULL, ADD nom VARCHAR(255) DEFAULT NULL, ADD prenom VARCHAR(255) DEFAULT NULL, ADD num_telephone VARCHAR(50) DEFAULT NULL, ADD date_naissance DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', ADD photo VARCHAR(255) DEFAULT NULL, ADD adresse VARCHAR(255) DEFAULT NULL, ADD ville VARCHAR(255) DEFAULT NULL, ADD cp VARCHAR(50) DEFAULT NULL, DROP membre_id, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, num_licence VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, num_telephone VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_naissance DATE DEFAULT NULL, photo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, adresse VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ville VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, cp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_inscription DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE participant_entrainement DROP FOREIGN KEY FK_3F5C00B7FB88E14F');
        $this->addSql('ALTER TABLE participant_entrainement DROP FOREIGN KEY FK_3F5C00B7A15E8FD');
        $this->addSql('DROP TABLE entrainement');
        $this->addSql('DROP TABLE participant_entrainement');
        $this->addSql('ALTER TABLE user ADD membre_id INT DEFAULT NULL, DROP num_licence, DROP nom, DROP prenom, DROP num_telephone, DROP date_naissance, DROP photo, DROP adresse, DROP ville, DROP cp, CHANGE roles roles JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6496A99F74A ON user (membre_id)');
    }
}
