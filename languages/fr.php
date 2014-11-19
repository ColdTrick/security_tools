<?php
/**
 * French translation for this plugin
 */

$french = array(
	'security_tools' => "Outils de sécurité",

	// settings
	'security_tools:settings:secure_upgrade' => "Sécuriser upgrade.php",
	'security_tools:settings:secure_upgrade:description' => "Avec un upgrade.php sécurisé, seuls les administrateurs connectés peuvent lancer upgrade.php ou vous devez utiliser un code spécial (voir lien ci-dessous).",

	'security_tools:settings:mails' => "Mails de sécurité",
	'security_tools:settings:mails_admin_admins' => "Notifier les autres administrateurs lors de l'ajout/suppression d'un administrateur",
	'security_tools:settings:mails_admin_admins:description' => "Notifier tous les autres administrateurs si un membre a été ajouté comme administrateur ou a eu ses droits administrateur supprimés.",
	'security_tools:settings:mails_admin_user' => "Notifier le membre lors de l'ajout/suppression de ses droits administrateur",
	'security_tools:settings:mails_admin_user:description' => "Notifier le membre lorsque des droits d'administration lui ont été accordés ou retirés.",
	'security_tools:settings:mails_password_change' => "Notifier le membre lors d'un changement de mot de passe",
	'security_tools:settings:mails_password_change:description' => "Notifier le membre lorsque son mot de passe a été modifié via la page de gestion des paramètres",
	'security_tools:settings:mails_banned' => "Notifier l'utilisateur lors de la désactivation/réintégration de son compte (ban)",
	'security_tools:settings:mails_banned:description' => "Notifier le membre s'il est désactivé par quelqu'un, ou a été réintégré au site.",
	'security_tools:settings:mails_verify_email_change' => "Vérifier les modifications de l'adresse email",
	'security_tools:settings:mails_verify_email_change:description' => "Si les membres changent leur adresse email la nouvelle adresse devra d'abord être vérifiée avant que le changement soit appliqué. Un mail avec une vérification sera envoyé envoyé à la nouvelle adresse. De plus, un mail d'information sera envoyé à l'ancienne adresse email après une modification réussie.",

	'security_tools:settings:other' => "Autre",
	'security_tools:settings:disable_autocomplete_on_password_fields' => "Désactiver l'autocomplétion des mots de passe",
	'security_tools:settings:disable_autocomplete_on_password_fields:description' => "Les données saisies dans ces champs seront conservées par le navigateur. Un attaquant qui a accès au navigateur d'un membre peut récupérer cette information. Ceci est particulièrement critique si l'applicaiton est généralement utilisée depuis des ordinateurs partagés comme des cybercafés ou points d'accès d'aéroport. Si vous désactivez cette option, les système de gestion des mots de passe ne pourront plus renseigner automatiquement ces champs. Le support de l'attribut \"autocomplete\" peut dépendre des navigateurs.",

	// site secret
	'security_tools:site_secret:warning' => "Après avoir régénéré la clef secrète du site, <a href='%s'>veuillez vérifier</a> le nouveau code nécessaire pour utiliser Upgrade.php.",

	// email change
	'security_tools:usersettings:email:request' => "Pour terminer la modification de votre adresse email, veuillez vérifier les mails de votre votre compte %s",
	'security_tools:email_change_confirmation:error:user' => "Vous n'êtes pas le membre pour lequel cette demande a été faite",
	'security_tools:email_change_confirmation:error:request' => "Aucune demande de changement d'adresse email en attente",
	'security_tools:email_change_confirmation:error:code' => "Le code de confirmation fourni est incorrect, veuillez vérifier l'email reçu",

	// admin notifications
	'security_tools:notify_admins:make_admin:subject' => "Un nouvel administrateur a été nommé pour %s",
	'security_tools:notify_admins:make_admin:message' => "Bonjour,

Le compte %s a été nommé administrateur du site par %s.
Consultez le profil du nouvel administrateur via %s.

Si vous pensez qu'il s'agit d'une erreur, veuillez vous connecter via %s et annuler cette action.",

	'security_tools:notify_admins:remove_admin:subject' => "Un administrateur a été supprimé %s",
	'security_tools:notify_admins:remove_admin:message' => "Bonjour,

Le compte %s n'est plus administrateur du site. Cette action a été effectuée par %s.
Consultez le profil de l'ancien administrateur via %s.

Si vous pensez qu'il s'agit d'une erreur, veuillez vous connecter via %s et annuler cette action.",

	// user notifications
	'security_tools:notify_user:make_admin:subject' => "Vous disposez désormais des droits d'administrateur du site %s",
	'security_tools:notify_user:make_admin:message' => "Bonjour %s,

Vous avez reçu les droits d'administrateur du site par %s.

Vous pouvez profiter de votre nouveau rôle dès maintenant en vous connectant via %s.

Si vous pensez qu'il s'agit d'une erreur, veuillez contacter l'un des autres administrateurs du site.",

	'security_tools:notify_user:remove_admin:subject' => "Vos droits d'administrateur du site %s ont été supprimés",
	'security_tools:notify_user:remove_admin:message' => "Bonjour %s,

Votre rôle d'administrateur du site a été retiré par %s.

Si vous pensez qu'il s'agit d'une erreur, veuillez contacter l'un des autres administrateurs du site.",

	'security_tools:notify_user:password:subject' => "Votre mot de passe a été changé",
	'security_tools:notify_user:password:message' => "Bonjour %s,

Votre mot de passe pour %s a été changé.

Si vous n'êtes pas à l'origine de ce changement ou ne l'avez pas demandé, veuillez vous rendre sur %s et demander un nouveau mot de passe, ou contacter l'un des administrateurs du site.",

	'security_tools:notify_user:email_change_request:subject' => "Demande de changement d'adresse email pour %s",
	'security_tools:notify_user:email_change_request:message' => "Bonjour %s,

Vous avez demandé le changement de votre adresse email sur %s vers cette adresse email.

Pour confirmer et terminer le changement, veuillez cliquer sur le lien suivant :
%s",

	'security_tools:notify_user:email_change:subject' => "Adresse email changée pour %s",
	'security_tools:notify_user:email_change:message' => "Bonjour %s,

Votre adresse email sur %s a été changée.

Si vous n'êtes pas à l'origine de ce changement ou ne l'avez pas demandé, veuillez contacter l'un des administrateurs du site.",

	'security_tools:notify_user:ban:subject' => "Votre compte sur %s a été désactivé",
	'security_tools:notify_user:ban:message' => "Bonjour %s,

Votre compte sur %s a été désactivé, vous ne pouvez plus vous connecter sur le site.

Si vous pensez qu'il s'agit d'une erreur, veuillez contacter l'un des administrateurs du site.",

	'security_tools:notify_user:unban:subject' => "Votre compte sur %s a été réactivé",
	'security_tools:notify_user:unban:message' => "Bonjour %s,

Votre compte sur %s a été réactivé, vous pouvez de nouveau vous connecter au site.
Pour vous connecter, cliquez sur %s.

Si vous pensez qu'il s'agit d'une erreur, veuillez contacter l'un des administrateurs du site.",
	
	// Frame killer
	'security_tools:settings:enable_frame_killer' => "Ajouter un code pour éviter l'insertion comme iframe (\"frame killer\" ou \"frame busting code\")",
	'security_tools:settings:enable_frame_killer:description' => "Note : l'ajout d'un framekiller est préférable dans la majorité des cas.<br />Attention : l'activation du framekiller bloque l'intégration du site par un site tiers sous forme d'iframe (en fonction des layouts utilisés). Si vous avez besoin d'intégrer ce site ou certains de ses éléments sous forme d'iframe, veuillez tester cette fonctionnalité avec soin avant de l'activer en production, et utilisez le code de désactivation lorsque c'est nécessaire.",
	
);

add_translation("fr", $french);

