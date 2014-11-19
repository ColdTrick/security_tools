<?php
/**
 * This file was created by Translation Editor v2.0
 * On 2014-11-19 15:06
 */

return array (
  'security_tools:settings:secure_upgrade' => 'Beveilig upgrade.php',
  'security_tools' => 'Security Tools',
  'security_tools:settings:secure_upgrade:description' => 'Indien upgrade.php beveiligd is kunnen alleen site beheerder upgrade.php uitvoeren of er moet een speciale code meegestuurd worden (zie onderstaande link).',
  'security_tools:settings:mails' => 'Security emails',
  'security_tools:settings:mails_admin_admins' => 'Meld beheerder bij verandering beheer rechten',
  'security_tools:settings:mails_admin_admins:description' => 'Een melding zal gaan naar alle overige site beheerders indien er een gebruiker beheerder is gemaakt, of als zijn rechten zijn afgenomen.',
  'security_tools:settings:mails_admin_user' => 'Meld gebruiker bij verandering beheer rechten',
  'security_tools:settings:mails_admin_user:description' => 'Een melding zal gaan naar de gebruiker indien de gebruiker beheerder is gemaakt, of als zijn rechten zijn afgenomen.',
  'security_tools:settings:mails_password_change' => 'Meld wijziging wachtwoord',
  'security_tools:settings:mails_password_change:description' => 'Een melding gaat naar de gebruiker indien zijn wachtwoord is gewijzigd via de instellingen pagina',
  'security_tools:settings:mails_banned' => 'Meld blokkeren van een gebruiker',
  'security_tools:settings:mails_banned:description' => 'Indien een gebruiker wordt ge(de)blokkeerd, zal hij daarvan op de hoogte worden gesteld.',
  'security_tools:settings:mails_verify_email_change' => 'Verifieer email adres bij wijziging',
  'security_tools:settings:mails_verify_email_change:description' => 'Indien een gebruiker zijn/haar emailadres wil wijzigen, moet de gebruiker eerst het nieuwe emailadres valideren. Een email met een verificatie link zal naar het nieuwe adres worden verzonden. Ook zal bij een succesvolle wijziging een notificatie worden verstuurt naar het oude emailadres.',
  'security_tools:settings:other' => 'Overige',
  'security_tools:settings:disable_autocomplete_on_password_fields' => 'Autocomplete of wachtwoord velden uitschakelen',
  'security_tools:settings:disable_autocomplete_on_password_fields:description' => 'Informatie in deze velden kan worden gecached door een browser. Een aanvaller die de browser van het slachtoffer kan benaderen, kan deze informatie stelen. Dit is extra belangrijk indien de site veelal wordt gebruikt op gedeelde computers, zoals in internetcafe\'s of op het vliegveld. Indien autocomplete wordt uitgeschakeld, kunnen password management tools niet meer deze velden invullen. De ondersteuning voor het autocomplete attribuut kan per browser verschillen.',
  'security_tools:usersettings:email:request' => 'Om uw email adres wijziging af te ronden, controleer de inhoud van uw %s inbox',
  'security_tools:email_change_confirmation:error:user' => 'U bent niet de gebruiker voor wie dit verzoek is ingediend',
  'security_tools:email_change_confirmation:error:request' => 'Er wacht geen emailadres op een wijziging',
  'security_tools:email_change_confirmation:error:code' => 'De opgegeven validatie code is onjuist, controleer het email bericht',
  'security_tools:notify_admins:make_admin:subject' => 'Een nieuwe site beheerder is toegewezen aan %s',
  'security_tools:notify_admins:make_admin:message' => 'Hallo,

de gebruiker %s is aangewezen als nieuwe site beheerder door %s.
Bekijk het profiel van de gebruiker hier: %s.

Indien deze wijziging ongewenst is, kunt u zich hier (%s) aanmelden om het ongedaan maken.',
  'security_tools:notify_admins:remove_admin:subject' => 'Een site beheerder is verwijderd van %s',
  'security_tools:notify_admins:remove_admin:message' => 'Hallo,

de gebruiker %s is niet langer een site beheerder. Dit is gedaan door %s.
Bekijk het profiel van de gebruiker hier: %s.

Indien deze wijziging ongewenst is, kunt u zich hier (%s) aanmelden om het ongedaan maken.',
  'security_tools:notify_user:make_admin:subject' => 'U bent aangewezen als site beheerder van %s',
  'security_tools:notify_user:make_admin:message' => 'Hallo %s,

U bent aangewezen als site beheerder door %s. U kunt gebruik maken van uw nieuwe rechten door u hier aan te melden: %s.

Indien deze wijziging ongewenst is, kunt u contact opnemen met een van de andere site beheerders.',
  'security_tools:notify_user:remove_admin:subject' => 'U bent niet langer site beheerder van %s',
  'security_tools:notify_user:remove_admin:message' => 'Hallo %s,

Uw site beheerder rechten zijn afgenomen door %s.

Indien deze wijziging ongewenst is, kunt u contact opnemen met een van de andere site beheerders.',
  'security_tools:notify_user:password:subject' => 'Uw wachtwoord is gewijzigd',
  'security_tools:notify_user:password:message' => 'Hallo %s,

Uw wachtwoord voor %s is gewijzigd.

Indien deze wijziging niet door u is doorgevoerd, neem contact op met een van de site beheerders van %s.',
  'security_tools:notify_user:email_change_request:subject' => 'Emailadres wijzigingsverzoek voor %s',
  'security_tools:notify_user:email_change_request:message' => 'Hallo %s,

u heeft een verzoek ingediend om uw emailadres op %s te wijzigen naar dit emailadres.

Om uw verzoek af te ronden klik hier: %s',
  'security_tools:notify_user:email_change:subject' => 'Emailadres gewijzigd voor %s',
  'security_tools:notify_user:email_change:message' => 'Beste %s,

uw emailadres op %s is gewijzigd.

Indien deze wijziging niet door u is uitgevoerd, neem contact op met een van de site beheerders.',
  'security_tools:notify_user:ban:subject' => 'U bent geblokkeerd op %s',
  'security_tools:notify_user:ban:message' => 'Hallo %s,

uw account op %s is geblokkeerd. U kunt niet langer gebruik maken van de site.

Indien deze wijziging ongewenst is, kunt u contact opnemen met een van de site beheerders.',
  'security_tools:notify_user:unban:subject' => 'U bent niet langer geblokkeerd op %s',
  'security_tools:notify_user:unban:message' => 'Hallo %s,

uw account op %s is niet langer geblokkeerd. U kunt weer gebruik maken van de site. Ga naar %s om u aan te melden.

Indien deze wijziging ongewenst is, kunt u contact opnemen met een van de site beheerders.',
);
