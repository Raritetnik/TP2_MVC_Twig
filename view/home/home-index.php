<section class="info-page">
    <h1>Bienvenu sur le site gestionnaire</h1>
    <p>La page est un gestionnaire de site librairie qui permet de modifier les données de base de données. Les quatre tables pricipales: Livre, Commande, Facture, Membre. Les tables additionnels d'Éditeur, Categorie, Livraison et Paiement ne sont pas modifiable ou affiché par le site.</p>

    <h1>Modèle de diagramme de relation d’une Librairie</h1>
    <img src="librairie-diag.png" alt="">

    <h1>Structure de site</h1>

    <ul>
        <li>Page d'accueil informationnel</li>
        <li>Page de gestion Membre:</li>
            <dd>- Page de creation</dd>
            <dd>- Page de modification</dd>
            <dd>- Option de suppression</dd>
        <li>Page de gestion Facture</li>
            <dd>- Page de creation</dd>
            <dd>- Page de modification</dd>
            <dd>- Option de suppression</dd>
        <li>Page de gestion Livre</li>
            <dd>- Page de creation</dd>
            <dd>- Page de modification</dd>
            <dd>- Option de suppression</dd>
        <li>Page de gestion Commande</li>
            <dd>- Page de creation</dd>
            <dd>- Page de modification</dd>
            <dd>- Option de suppression</dd>
    </ul>

    <h1>Composition des fichier de site</h1>
    <p>Le site est composée en modèle MVC avec framework de Twig. Le fichier CRUD contient des fonctionnalités le plus utilisées par les controlleurs. Aussi, les fonctions particuliers sont contenu dans les fichiers Modele attribués à leur nom.</p>
</section>