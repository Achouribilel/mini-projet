<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210404182419 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_plats DROP FOREIGN KEY FK_BC22BDC982EA2E54');
        $this->addSql('ALTER TABLE commande_plats DROP FOREIGN KEY FK_BC22BDC9D73DB560');
        $this->addSql('DROP INDEX IDX_BC22BDC982EA2E54 ON commande_plats');
        $this->addSql('ALTER TABLE commande_plats ADD id INT AUTO_INCREMENT NOT NULL, ADD comande_id INT DEFAULT NULL, CHANGE plat_id plat_id INT DEFAULT NULL, CHANGE commande_id quantite INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE commande_plats ADD CONSTRAINT FK_BC22BDC9F71BCFFF FOREIGN KEY (comande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE commande_plats ADD CONSTRAINT FK_BC22BDC9D73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id)');
        $this->addSql('CREATE INDEX IDX_BC22BDC9F71BCFFF ON commande_plats (comande_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande_plats MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE commande_plats DROP FOREIGN KEY FK_BC22BDC9F71BCFFF');
        $this->addSql('ALTER TABLE commande_plats DROP FOREIGN KEY FK_BC22BDC9D73DB560');
        $this->addSql('DROP INDEX IDX_BC22BDC9F71BCFFF ON commande_plats');
        $this->addSql('ALTER TABLE commande_plats DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE commande_plats DROP id, DROP comande_id, CHANGE plat_id plat_id INT NOT NULL, CHANGE quantite commande_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande_plats ADD CONSTRAINT FK_BC22BDC982EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_plats ADD CONSTRAINT FK_BC22BDC9D73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_BC22BDC982EA2E54 ON commande_plats (commande_id)');
        $this->addSql('ALTER TABLE commande_plats ADD PRIMARY KEY (commande_id, plat_id)');
    }
}
