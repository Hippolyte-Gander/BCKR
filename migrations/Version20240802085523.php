<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240802085523 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD poste_id INT DEFAULT NULL, ADD appartient_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA0905086 FOREIGN KEY (poste_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCD35BF833 FOREIGN KEY (appartient_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCA0905086 ON commentaire (poste_id)');
        $this->addSql('CREATE INDEX IDX_67F068BCD35BF833 ON commentaire (appartient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA0905086');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCD35BF833');
        $this->addSql('DROP INDEX IDX_67F068BCA0905086 ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BCD35BF833 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP poste_id, DROP appartient_id');
    }
}
