<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Connexion échouée',
        'success' => 'Connecté',
        'password-reset' => 'Réinitialiser le mot de passe',
        'reset-password' => 'Réinitialisation du mot de passe demandée',
        'checkpoint' => 'Authentification à deux facteurs demandée',
        'recovery-token' => 'A utilisé un code de secours à deux facteurs',
        'token' => 'A passé l\'authentification à deux facteurs',
        'ip-blocked' => 'Requête bloquée provenant d\'une adresse IP non listée pour :identifier',
        'sftp' => [
            'fail' => 'Connexion au SFTP échouée',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'L\'adresse e-mail a été modifié de :old à :new',
            'password-changed' => 'Le mot de passe a été modifié',
        ],
        'api-key' => [
            'create' => 'A créé la clé d\'API :identifier',
            'delete' => 'A supprimé la clé d\'API :identifier',
        ],
        'ssh-key' => [
            'create' => 'A ajouté la clé SSH :fingerprint au compte',
            'delete' => 'A supprimé la clé SSH :fingerprint du compte',
        ],
        'two-factor' => [
            'create' => 'A activé l\'authentification à deux facteurs',
            'delete' => 'A désactivé l\'authentification à deux facteurs',
        ],
    ],
    'server' => [
        'reinstall' => 'A réinstallé le serveur',
        'console' => [
            'command' => 'A exécuté la commande ":command" sur le serveur',
        ],
        'power' => [
            'start' => 'A démarré le serveur',
            'stop' => 'A arrêté le serveur',
            'restart' => 'A redémarré le serveur',
            'kill' => 'A forcé l\'arrêt du serveur',
        ],
        'backup' => [
            'download' => 'A téléchargé la sauvegarde :name',
            'delete' => 'A supprimé la sauvegarde :name',
            'restore' => 'A restauré la sauvegarde :name (fichiers supprimés : :truncate)',
            'restore-complete' => 'Restauration de la sauvegarde :name complétée',
            'restore-failed' => 'Restauration de la sauvegarde :name échouée',
            'start' => 'A démarré la sauvegarde :name',
            'complete' => 'A marqué la sauvegarde :name comme complète',
            'fail' => 'A marqué la sauvegarde :name comme échouée',
            'lock' => 'A verouillé la sauvegarde :name',
            'unlock' => 'A déverouillé la sauvegarde :name',
        ],
        'database' => [
            'create' => 'A créé la base de donnée :name',
            'rotate-password' => 'Mot de passe modifiée pour la base de donnée :name',
            'delete' => 'A supprimé la base de donnée :name',
        ],
        'file' => [
            'compress_one' => 'A compressé :directory:file',
            'compress_other' => 'A compressé :count fichiers dans :directory',
            'read' => 'A regardé le contenu de :file',
            'copy' => 'A créé une copie de :file',
            'create-directory' => 'A créé le dossier :directory:name',
            'decompress' => 'A décompressé :files dans :directory',
            'delete_one' => 'A supprimé :directory:files.0',
            'delete_other' => 'A supprimé :count fichiers dans :directory',
            'download' => 'A téléchargé :file',
            'pull' => 'A téléchargé un fichier distant de :url dans :directory',
            'rename_one' => 'A renommé :directory:files.0.from en :directory:files.0.to',
            'rename_other' => 'A renommé :count fichiers dans :directory',
            'write' => 'A écrit un nouveau contenu to :file',
            'upload' => 'A commencé le téléversement d\'un fichier',
            'uploaded' => 'A téléversé :directory:file',
        ],
        'sftp' => [
            'denied' => 'Accès SFTP bloqué en raison des permissions',
            'create_one' => 'A créé :files.0',
            'create_other' => 'A créé :count nouveaux fichiers',
            'write_one' => 'A modifié le contenu de :files.0',
            'write_other' => 'A modifié le contenu de :count fichiers',
            'delete_one' => 'A supprimé :files.0',
            'delete_other' => 'A supprimé :count fichiers',
            'create-directory_one' => 'A créé le dossier :files.0',
            'create-directory_other' => 'A créé :count dossiers',
            'rename_one' => 'A renommé :files.0.from en :files.0.to',
            'rename_other' => 'A renommé ou déplacé :count fichiers',
        ],
        'allocation' => [
            'create' => 'Added :allocation to the server',
            'notes' => 'Updated the notes for :allocation from ":old" to ":new"',
            'primary' => 'Set :allocation as the primary server allocation',
            'delete' => 'Deleted the :allocation allocation',
        ],
        'schedule' => [
            'create' => 'Created the :name schedule',
            'update' => 'Updated the :name schedule',
            'execute' => 'Manually executed the :name schedule',
            'delete' => 'Deleted the :name schedule',
        ],
        'task' => [
            'create' => 'Created a new ":action" task for the :name schedule',
            'update' => 'Updated the ":action" task for the :name schedule',
            'delete' => 'Deleted a task for the :name schedule',
        ],
        'settings' => [
            'rename' => 'Renamed the server from :old to :new',
            'description' => 'Changed the server description from :old to :new',
        ],
        'startup' => [
            'edit' => 'Changed the :variable variable from ":old" to ":new"',
            'image' => 'Updated the Docker Image for the server from :old to :new',
        ],
        'subuser' => [
            'create' => 'Added :email as a subuser',
            'update' => 'Updated the subuser permissions for :email',
            'delete' => 'Removed :email as a subuser',
        ],
    ],
];
