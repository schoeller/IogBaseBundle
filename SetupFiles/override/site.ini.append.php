<?php /* #?ini charset="utf-8"?
 
[DatabaseSettings]
DatabaseImplementation=ezmysqli
Server=localhost
Port=
User=[DBUSER]
Password=[DBPASS]
Database=[DBNAME]
Charset=
Socket=disabled
 
[FileSettings]
VarDir=var/site
 
[Session]
SessionNameHandler=custom
 
[SiteSettings]
DefaultAccess=site
SiteList[]
SiteList[]=site
 
[SiteAccessSettings]
CheckValidity=false
AvailableSiteAccessList[]
AvailableSiteAccessList[]=site
AvailableSiteAccessList[]=siteadmin
RelatedSiteAccessList[]
RelatedSiteAccessList[]=site
RelatedSiteAccessList[]=siteadmin
MatchOrder=host;uri
 
# Host matching
HostMatchMapItems[]=www.example.com;example
HostMatchMapItems[]=admin.example.com;example_admin
 
[InformationCollectionSettings]
EmailReceiver=webmaster@example.com
 
[MailSettings]
Transport=sendmail
AdminEmail=webmaster@example.com
EmailSender=test@example.com
 
[RegionalSettings]
Locale=ger-DE
ContentObjectLocale=ger-DE
TextTranslation=disabled
 
*/ ?>
