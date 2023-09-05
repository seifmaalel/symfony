<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227181255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites (idact INT AUTO_INCREMENT NOT NULL, nom VARCHAR(55) DEFAULT NULL, description LONGTEXT DEFAULT NULL, categorie VARCHAR(55) DEFAULT NULL, date DATE DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(idact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, categorie VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, quantite INT NOT NULL, prix_total DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ev (id INT AUTO_INCREMENT NOT NULL, nom LONGTEXT DEFAULT NULL, date DATE DEFAULT NULL, lieu LONGTEXT DEFAULT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(55) DEFAULT NULL, date DATE DEFAULT NULL, capacite INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, image LONGBLOB DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guide (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, tel INT NOT NULL, idz INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_3170B74B7294869C (article_id), INDEX IDX_3170B74B82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maisonhote (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, num INT NOT NULL, prix DOUBLE PRECISION NOT NULL, note DOUBLE PRECISION NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transport (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE reservation CHANGE idRz idRz INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX cleetranger ON reservation (idRz)');
        $this->addSql('ALTER TABLE zone_de_loisir DROP image, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(30) NOT NULL, CHANGE adresse adresse VARCHAR(30) NOT NULL, CHANGE tel tel VARCHAR(30) NOT NULL, CHANGE prix prix VARCHAR(30) NOT NULL, CHANGE type type VARCHAR(30) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B7294869C');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74B82EA2E54');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE ev');
        $this->addSql('DROP TABLE events');
        $this->addSql('DROP TABLE guide');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('DROP TABLE maisonhote');
        $this->addSql('DROP TABLE transport');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495510E9A39D');
        $this->addSql('DROP INDEX cleetranger ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE idRz idRz INT NOT NULL');
        $this->addSql('ALTER TABLE zone_de_loisir MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE zone_de_loisir DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE zone_de_loisir ADD image VARCHAR(300) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE id id INT NOT NULL, CHANGE nom nom VARCHAR(25) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE adresse adresse VARCHAR(25) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE tel tel VARCHAR(25) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE prix prix VARCHAR(25) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE type type VARCHAR(25) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE email email VARCHAR(25) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
