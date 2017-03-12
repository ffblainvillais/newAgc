<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'application' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAppliAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/application',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'album' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::albumAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/album',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'location' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::locationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/location',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prestation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::prestationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prestation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partenaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::partenaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partenaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'temoignage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::temoignageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temoignage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-temoignage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::ajoutTemoignageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temoignage/ajout-temoignage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion-temoignage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::gestionTemoignageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temoignages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publier-temoignage' => array (  0 =>   array (    0 => 'idTemoignage',  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::publierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTemoignage',    ),    1 =>     array (      0 => 'text',      1 => '/temoignages/publier-temoignage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer-temoignage' => array (  0 =>   array (    0 => 'idTemoignage',  ),  1 =>   array (    '_controller' => 'VitrineBundle\\Controller\\VitrineController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTemoignage',    ),    1 =>     array (      0 => 'text',      1 => '/temoignages/supprimer-temoignage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partenaire-appli' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partenaire-commerciaux',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-partenaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partenaire-commerciaux/ajout-partenaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-partenaire' => array (  0 =>   array (    0 => 'idPartenaire',  ),  1 =>   array (    '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::suppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idPartenaire',    ),    1 =>     array (      0 => 'text',      1 => '/partenaire-commerciaux/suppression-partenaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-partenaire' => array (  0 =>   array (    0 => 'idPartenaire',  ),  1 =>   array (    '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::modificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idPartenaire',    ),    1 =>     array (      0 => 'text',      1 => '/partenaire-commerciaux/modification-partenaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-pop-partenaire' => array (  0 =>   array (    0 => 'idPartenaire',  ),  1 =>   array (    '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::modificationPopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idPartenaire',    ),    1 =>     array (      0 => 'text',      1 => '/partenaire-commerciaux/modification-pop-partenaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/ajout-article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-article' => array (  0 =>   array (    0 => 'idArticle',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::suppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idArticle',    ),    1 =>     array (      0 => 'text',      1 => '/article/suppression-article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-article' => array (  0 =>   array (    0 => 'idArticle',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idArticle',    ),    1 =>     array (      0 => 'text',      1 => '/article/modification-article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-pop-article' => array (  0 =>   array (    0 => 'idArticle',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationPopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idArticle',    ),    1 =>     array (      0 => 'text',      1 => '/article/modification-pop-article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-lot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutLotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/ajout-lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-lot' => array (  0 =>   array (    0 => 'idLot',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::suppressionLotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    1 =>     array (      0 => 'text',      1 => '/article/suppression-lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-lot' => array (  0 =>   array (    0 => 'idLot',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationLotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    1 =>     array (      0 => 'text',      1 => '/article/modification-Lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-pop-lot' => array (  0 =>   array (    0 => 'idLot',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationPopLotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    1 =>     array (      0 => 'text',      1 => '/article/modification-pop-lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-article-lot-pop' => array (  0 =>   array (    0 => 'idLot',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutArticlePopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    1 =>     array (      0 => 'text',      1 => '/article/ajout-article-lot-pop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-article-lot' => array (  0 =>   array (    0 => 'idLot',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    1 =>     array (      0 => 'text',      1 => '/article/ajout-article-lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-article-lot' => array (  0 =>   array (    0 => 'idArticle',    1 => 'idLot',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\ArticleController::suppressionArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idArticle',    ),    2 =>     array (      0 => 'text',      1 => '/article/suppression-article-lot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-commande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commande/ajout-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-article-commande-pop' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutArticlePopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/ajout-article-commande-pop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-article-commande' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/ajout-article-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-lot-commande-pop' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutLotPopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/ajout-lot-commande-pop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-lot-commande' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutLotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/ajout-lot-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-lot-commande' => array (  0 =>   array (    0 => 'idLot',    1 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::suppressionLotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLot',    ),    2 =>     array (      0 => 'text',      1 => '/commande/suppression-lot-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-article-commande' => array (  0 =>   array (    0 => 'idArticle',    1 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::suppressionArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idArticle',    ),    2 =>     array (      0 => 'text',      1 => '/commande/suppression-article-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-commande' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::suppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/suppression-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commande-paye' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::payeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/commande-paye',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'générer-facture' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::factureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/générer-facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'générer-devis' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::devisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/générer-devis',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'archiver-commande' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::archiverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/archiver-commande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'voir-commandes-archivees' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::commandesArchiveesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commande/commandes-archivees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'retour-location' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::retourLocationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/retour-location',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'depart-location' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::departLocationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/depart-location',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'versement-acompte-pop' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::versementAcomptePopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/versement-acompte-pop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'versement-acompte' => array (  0 =>   array (    0 => 'idCommande',  ),  1 =>   array (    '_controller' => 'CommandeBundle\\Controller\\CommandeController::versementAcompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    1 =>     array (      0 => 'text',      1 => '/commande/versement-acompte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/ajout-client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-client' => array (  0 =>   array (    0 => 'idClient',  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::suppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    1 =>     array (      0 => 'text',      1 => '/client/suppression-client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-client' => array (  0 =>   array (    0 => 'idClient',  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::modificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    1 =>     array (      0 => 'text',      1 => '/client/modification-client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-pop-client' => array (  0 =>   array (    0 => 'idClient',  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::modificationPopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    1 =>     array (      0 => 'text',      1 => '/client/modification-pop-client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mail-client' => array (  0 =>   array (    0 => 'idClient',  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::mailClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    1 =>     array (      0 => 'text',      1 => '/client/mail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mail-client-pop' => array (  0 =>   array (    0 => 'idClient',  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::mailClientPopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    1 =>     array (      0 => 'text',      1 => '/client/mail-pop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newsletter-client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::newsletterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'relance-client' => array (  0 =>   array (    0 => 'idCommande',    1 => 'idClient',  ),  1 =>   array (    '_controller' => 'ClientBundle\\Controller\\ClientController::relanceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCommande',    ),    2 =>     array (      0 => 'text',      1 => '/client/relance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bilan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BilanBundle\\Controller\\BilanController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bilan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generation-bilan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BilanBundle\\Controller\\BilanController::generationBilanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/generation-bilan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nommer-super-admin' => array (  0 =>   array (    0 => 'idUtilisateur',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::superAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUtilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/nommer-super-admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nommer-admin' => array (  0 =>   array (    0 => 'idUtilisateur',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUtilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/nommer-admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove-admin' => array (  0 =>   array (    0 => 'idUtilisateur',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::removeAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUtilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/remove-admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-utilisateur' => array (  0 =>   array (    0 => 'idUtilisateur',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::suppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUtilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/suppression',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'activer' => array (  0 =>   array (    0 => 'idUtilisateur',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::activerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUtilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/activer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'desactiver' => array (  0 =>   array (    0 => 'idUtilisateur',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::desactiverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUtilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/utilisateur/desactiver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'depense' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DepenseBundle\\Controller\\DepenseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/depense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout-depense' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DepenseBundle\\Controller\\DepenseController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/depense/ajout-depense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppression-depense' => array (  0 =>   array (    0 => 'idDepense',  ),  1 =>   array (    '_controller' => 'DepenseBundle\\Controller\\DepenseController::suppressionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idDepense',    ),    1 =>     array (      0 => 'text',      1 => '/depense/suppression-depense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-depense' => array (  0 =>   array (    0 => 'idDepense',  ),  1 =>   array (    '_controller' => 'DepenseBundle\\Controller\\DepenseController::modificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idDepense',    ),    1 =>     array (      0 => 'text',      1 => '/depense/modification-depense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modification-pop-depense' => array (  0 =>   array (    0 => 'idDepense',  ),  1 =>   array (    '_controller' => 'DepenseBundle\\Controller\\DepenseController::modificationPopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idDepense',    ),    1 =>     array (      0 => 'text',      1 => '/depense/modification-pop-depense',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
