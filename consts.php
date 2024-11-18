<?php

const DB_MYSQL_57 = 'mysql57';
const DB_MYSQL_57_PDO = 'mysql57pdo';
const DB_MYSQL_80 = 'mysql80';
const DB_MYSQL_84 = 'mysql84';
const DB_PGSQL = 'pgsql';
const DB_MARIADB = 'mariadb';

/** Repositories which must not have installer included in the matrix, even though their type suggests they should */
const NO_INSTALLER_REPOS = [
    'silverstripe-config',
];

/** Repositories that either don't have a composer type or have a weird composer type, though we still want installer */
const FORCE_INSTALLER_REPOS = [
    'silverstripe-behat-extension',
    'silverstripe-serve',
    // recipe-solr-search doesn't include recipe-cms or recipe-core unlike our other recipes
    'recipe-solr-search',
    // recipe-blog requires a theme for the unit tests to work, the config and dependency for which are
    // supplied by installer. Just adding a theme as a dev-dependency is insufficient because we'd still
    // lack the yml config to activate that theme
    'recipe-blog',
];

// use hardcoded.php to bulk update update this after creating a .cow.pat.json
// for multiple versions, use an array e.g. silverstripe-mymodule => ['2.3', '2.4']
const INSTALLER_TO_REPO_MINOR_VERSIONS = [
    '4.10' => [
        'comment-notifications' => '2.2',
        'cwp' => '2.9',
        'cwp-agencyextensions' => '2.6',
        'cwp-core' => '2.9',
        'cwp-pdfexport' => '1.3',
        'cwp-search' => '1.6',
        'cwp-starter-theme' => '3.2',
        'cwp-watea-theme' => '3.1',
        'silverstripe-advancedworkflow' => '5.6',
        'silverstripe-akismet' => '4.2',
        'silverstripe-auditor' => '2.4',
        'silverstripe-blog' => '3.9',
        'silverstripe-ckan-registry' => '1.4',
        'silverstripe-comments' => '3.7',
        'silverstripe-composer-update-checker' => '2.1',
        'silverstripe-content-widget' => '2.3',
        'silverstripe-contentreview' => '4.4',
        'silverstripe-crontask' => '2.4',
        'silverstripe-documentconverter' => '2.2',
        'silverstripe-elemental' => '4.8',
        'silverstripe-elemental-bannerblock' => '2.4',
        'silverstripe-elemental-fileblock' => '2.3',
        'silverstripe-elemental-userforms' => '3.1',
        'silverstripe-environmentcheck' => '2.4',
        'silverstripe-externallinks' => '2.2',
        'silverstripe-fluent' => '4.6',
        'silverstripe-fulltextsearch' => '3.9',
        'silverstripe-graphql' => '3.7',
        'silverstripe-gridfieldqueuedexport' => '2.6',
        'silverstripe-html5' => ['2.2', '2.3'],
        'silverstripe-hybridsessions' => '2.4',
        'silverstripe-iframe' => '2.2',
        'silverstripe-ldap' => '1.3',
        'silverstripe-login-forms' => '4.6',
        'silverstripe-maintenance' => '2.4',
        'silverstripe-mfa' => '4.5',
        'silverstripe-mimevalidator' => '2.3',
        'silverstripe-multivaluefield' => '5.2',
        'silverstripe-queuedjobs' => '4.9',
        'silverstripe-realme' => '4.2',
        'silverstripe-registry' => '2.4',
        'silverstripe-restfulserver' => '2.4',
        'silverstripe-security-extensions' => '4.2',
        'silverstripe-securityreport' => '2.4',
        'silverstripe-segment-field' => '2.5',
        'silverstripe-session-manager' => '1.2',
        'silverstripe-sharedraftcontent' => '2.6',
        'silverstripe-sitewidecontent-report' => '3.2',
        'silverstripe-spamprotection' => '3.2',
        'silverstripe-spellcheck' => '2.3',
        'silverstripe-subsites' => '2.5',
        'silverstripe-tagfield' => '2.8',
        'silverstripe-taxonomy' => '2.3',
        'silverstripe-textextraction' => '3.3',
        'silverstripe-totp-authenticator' => '4.3',
        'silverstripe-userforms' => ['5.11', '5.12'],
        'silverstripe-versionfeed' => '2.2',
        'silverstripe-webauthn-authenticator' => '4.4',
        'silverstripe-widgets' => '2.2',
        'silverstripe-gridfieldextensions' => '3.3',
    ],
    '4.11' => [
        'comment-notifications' => '2.3',
        'cwp' => '2.10',
        'cwp-agencyextensions' => '2.7',
        'cwp-core' => ['2.10', '2.11'],
        'cwp-pdfexport' => '1.4',
        'cwp-search' => '1.7',
        'cwp-starter-theme' => '3.2',
        'cwp-watea-theme' => '3.1',
        'silverstripe-advancedworkflow' => '5.7',
        'silverstripe-akismet' => '4.3',
        'silverstripe-auditor' => '2.5',
        'silverstripe-blog' => '3.10',
        'silverstripe-ckan-registry' => '1.5',
        'silverstripe-comments' => '3.8',
        'silverstripe-composer-update-checker' => '3.0',
        'silverstripe-content-widget' => '2.4',
        'silverstripe-contentreview' => '4.5',
        'silverstripe-crontask' => '2.5',
        'silverstripe-documentconverter' => '2.3',
        'silverstripe-elemental' => '4.9',
        'silverstripe-elemental-bannerblock' => '2.5',
        'silverstripe-elemental-fileblock' => '2.4',
        'silverstripe-elemental-userforms' => '3.2',
        'silverstripe-environmentcheck' => '2.5',
        'silverstripe-externallinks' => '2.3',
        'silverstripe-fluent' => '4.7',
        'silverstripe-fulltextsearch' => '3.11',
        'silverstripe-graphql' => '4.0',
        'silverstripe-gridfieldqueuedexport' => '2.7',
        'silverstripe-html5' => '2.4',
        'silverstripe-hybridsessions' => '2.5',
        'silverstripe-iframe' => '2.3',
        'silverstripe-ldap' => '1.4',
        'silverstripe-login-forms' => '4.7',
        'silverstripe-maintenance' => '2.6',
        'silverstripe-mfa' => '4.6',
        'silverstripe-mimevalidator' => '2.4',
        'silverstripe-multivaluefield' => '5.3',
        'silverstripe-queuedjobs' => '4.10',
        'silverstripe-realme' => '4.3',
        'silverstripe-registry' => '2.5',
        'silverstripe-restfulserver' => '2.5',
        'silverstripe-security-extensions' => '4.3',
        'silverstripe-securityreport' => '2.5',
        'silverstripe-segment-field' => '2.6',
        'silverstripe-session-manager' => '1.3',
        'silverstripe-sharedraftcontent' => '2.7',
        'silverstripe-sitewidecontent-report' => '3.3',
        'silverstripe-spamprotection' => '3.3',
        'silverstripe-spellcheck' => '2.4',
        'silverstripe-subsites' => '2.6',
        'silverstripe-tagfield' => '2.9',
        'silverstripe-taxonomy' => '2.4',
        'silverstripe-textextraction' => '3.4',
        'silverstripe-totp-authenticator' => '4.4',
        'silverstripe-userforms' => '5.13',
        'silverstripe-versionfeed' => '2.3',
        'silverstripe-webauthn-authenticator' => '4.5',
        'silverstripe-widgets' => '2.3',
        'silverstripe-gridfieldextensions' => '3.4',
    ],
    '4.12' => [
        'comment-notifications' => '2.3',
        'cwp' => '2.10',
        'cwp-agencyextensions' => '2.7',
        'cwp-core' => '2.11',
        'cwp-pdfexport' => '1.4',
        'cwp-search' => '1.7',
        'cwp-starter-theme' => '3.2',
        'cwp-watea-theme' => '3.1',
        'silverstripe-advancedworkflow' => '5.8',
        'silverstripe-akismet' => '4.4',
        'silverstripe-auditor' => '2.5',
        'silverstripe-blog' => '3.11',
        'silverstripe-ckan-registry' => '1.6',
        'silverstripe-comments' => '3.9',
        'silverstripe-composer-update-checker' => '3.0',
        'silverstripe-content-widget' => '2.4',
        'silverstripe-contentreview' => '4.6',
        'silverstripe-crontask' => '2.5',
        'silverstripe-developer-docs' => '4.12',
        'silverstripe-documentconverter' => '2.4',
        'silverstripe-elemental' => '4.10',
        'silverstripe-elemental-bannerblock' => '2.6',
        'silverstripe-elemental-fileblock' => '2.4',
        'silverstripe-elemental-userforms' => '3.2',
        'silverstripe-environmentcheck' => '2.6',
        'silverstripe-externallinks' => '2.3',
        'silverstripe-fluent' => '4.7',
        'silverstripe-fulltextsearch' => '3.11',
        'silverstripe-graphql' => ['4.1', '4.2'],
        'silverstripe-gridfieldqueuedexport' => '2.7',
        'silverstripe-html5' => '2.4',
        'silverstripe-hybridsessions' => '2.6',
        'silverstripe-iframe' => '2.3',
        'silverstripe-ldap' => '1.5',
        'silverstripe-login-forms' => '4.8',
        'silverstripe-maintenance' => '2.6',
        'silverstripe-mfa' => '4.7',
        'silverstripe-mimevalidator' => '2.4',
        'silverstripe-multivaluefield' => '5.3',
        'silverstripe-queuedjobs' => '4.11',
        'silverstripe-realme' => '4.3',
        'silverstripe-registry' => '2.5',
        'silverstripe-restfulserver' => '2.5',
        'silverstripe-security-extensions' => '4.4',
        'silverstripe-securityreport' => '2.5',
        'silverstripe-segment-field' => '2.7',
        'silverstripe-session-manager' => '1.4',
        'silverstripe-sharedraftcontent' => '2.8',
        'silverstripe-sitewidecontent-report' => '3.3',
        'silverstripe-spamprotection' => '3.3',
        'silverstripe-spellcheck' => '2.4',
        'silverstripe-subsites' => '2.7',
        'silverstripe-tagfield' => '2.10',
        'silverstripe-taxonomy' => '2.4',
        'silverstripe-textextraction' => '3.4',
        'silverstripe-totp-authenticator' => '4.5',
        'silverstripe-userforms' => '5.14',
        'silverstripe-versionfeed' => '2.3',
        'silverstripe-webauthn-authenticator' => '4.6',
        'silverstripe-widgets' => '2.3',
        'silverstripe-gridfieldextensions' => '3.5',
    ],
    '4.13' => [
        'comment-notifications' => '2.4',
        'cwp' => '2.11',
        'cwp-agencyextensions' => '2.7',
        'cwp-core' => '2.12',
        'cwp-pdfexport' => '1.5',
        'cwp-search' => '1.8',
        'cwp-starter-theme' => '3.3',
        'cwp-watea-theme' => '3.2',
        'silverstripe-advancedworkflow' => '5.9',
        'silverstripe-akismet' => '4.5',
        'silverstripe-auditor' => '2.6',
        'silverstripe-behat-extension' => '4.11',
        'silverstripe-blog' => '3.12',
        'silverstripe-ckan-registry' => '1.7',
        'silverstripe-comments' => '3.10',
        'silverstripe-composer-update-checker' => '3.0',
        'silverstripe-config' => '1.6',
        'silverstripe-content-widget' => '2.4',
        'silverstripe-contentreview' => '4.7',
        'silverstripe-crontask' => '2.6',
        'silverstripe-developer-docs' => '4.13',
        'silverstripe-documentconverter' => '2.5',
        'silverstripe-elemental' => '4.11',
        'silverstripe-elemental-bannerblock' => '2.7',
        'silverstripe-elemental-fileblock' => '2.5',
        'silverstripe-elemental-userforms' => '3.3',
        'silverstripe-environmentcheck' => '2.7',
        'silverstripe-externallinks' => '2.4',
        'silverstripe-fluent' => '4.8',
        'silverstripe-fulltextsearch' => '3.12',
        'silverstripe-graphql' => '4.3',
        'silverstripe-gridfieldqueuedexport' => '2.8',
        'silverstripe-html5' => '2.4',
        'silverstripe-hybridsessions' => '2.7',
        'silverstripe-iframe' => '2.4',
        'silverstripe-ldap' => '1.6',
        'silverstripe-login-forms' => '4.9',
        'silverstripe-maintenance' => '2.7',
        'silverstripe-mfa' => '4.8',
        'silverstripe-mimevalidator' => '2.5',
        'silverstripe-multivaluefield' => '5.4',
        'silverstripe-queuedjobs' => '4.12',
        'silverstripe-realme' => '4.4',
        'silverstripe-registry' => '2.6',
        'silverstripe-restfulserver' => '2.6',
        'silverstripe-security-extensions' => '4.5',
        'silverstripe-securityreport' => '2.6',
        'silverstripe-segment-field' => '2.8',
        'silverstripe-session-manager' => '1.5',
        'silverstripe-sharedraftcontent' => '2.9',
        'silverstripe-sitewidecontent-report' => '3.4',
        'silverstripe-spamprotection' => '3.4',
        'silverstripe-spellcheck' => '2.5',
        'silverstripe-subsites' => '2.8',
        'silverstripe-tagfield' => '2.11',
        'silverstripe-taxonomy' => '2.5',
        'silverstripe-textextraction' => '3.5',
        'silverstripe-totp-authenticator' => '4.6',
        'silverstripe-userforms' => '5.15',
        'silverstripe-versionfeed' => '2.4',
        'silverstripe-webauthn-authenticator' => '4.7',
        'silverstripe-widgets' => '2.4',
        'silverstripe-gridfieldextensions' => '3.6',
    ],
    '5.0' => [
        'comment-notifications' => '3.0',
        'cwp' => '3.0',
        'cwp-agencyextensions' => '3.0',
        'cwp-core' => '3.0',
        'cwp-search' => '2.0',
        'cwp-starter-theme' => '4.0',
        'cwp-watea-theme' => '4.0',
        'silverstripe-advancedworkflow' => '6.0',
        'silverstripe-auditor' => '3.0',
        'silverstripe-blog' => '4.0',
        'silverstripe-ckan-registry' => '2.0',
        'silverstripe-comments' => '4.0',
        'silverstripe-composer-update-checker' => '4.0',
        'silverstripe-content-widget' => '3.0',
        'silverstripe-contentreview' => '5.0',
        'silverstripe-crontask' => '3.0',
        'silverstripe-developer-docs' => '5.0',
        'silverstripe-documentconverter' => '3.0',
        'silverstripe-elemental' => '5.0',
        'silverstripe-elemental-bannerblock' => '3.0',
        'silverstripe-elemental-fileblock' => '3.0',
        'silverstripe-elemental-userforms' => '4.0',
        'silverstripe-environmentcheck' => '3.0',
        'silverstripe-externallinks' => '3.0',
        'silverstripe-fluent' => '7.0',
        'silverstripe-fulltextsearch' => '4.0',
        'silverstripe-graphql' => '5.0',
        'silverstripe-gridfield-bulk-editing-tools' => '4.0',
        'silverstripe-gridfieldextensions' => '4.0',
        'silverstripe-gridfieldqueuedexport' => '3.0',
        'silverstripe-hybridsessions' => '3.0',
        'silverstripe-iframe' => '3.0',
        'silverstripe-ldap' => '2.0',
        'silverstripe-login-forms' => '5.0',
        'silverstripe-lumberjack' => '3.0',
        'silverstripe-maintenance' => '3.0',
        'silverstripe-mfa' => '5.0',
        'silverstripe-mimevalidator' => '3.0',
        'silverstripe-multivaluefield' => '6.0',
        'silverstripe-queuedjobs' => '5.0',
        'silverstripe-realme' => '5.0',
        'silverstripe-registry' => '3.0',
        'silverstripe-restfulserver' => '3.0',
        'silverstripe-securityreport' => '3.0',
        'silverstripe-segment-field' => '3.0',
        'silverstripe-session-manager' => '2.0',
        'silverstripe-sharedraftcontent' => '3.0',
        'silverstripe-sitewidecontent-report' => '4.0',
        'silverstripe-spamprotection' => '4.0',
        'silverstripe-staticpublishqueue' => '6.0',
        'silverstripe-subsites' => '3.0',
        'silverstripe-tagfield' => '3.0',
        'silverstripe-taxonomy' => '3.0',
        'silverstripe-textextraction' => '4.0',
        'silverstripe-totp-authenticator' => '5.0',
        'silverstripe-userforms' => '6.0',
        'silverstripe-vendor-plugin' => '2.0',
        'silverstripe-versionfeed' => '3.0',
        'silverstripe-webauthn-authenticator' => '5.0',
        'silverstripe-widgets' => '3.0',
    ],
    '5.1' => [
        'cwp-agencyextensions' => '3.1',
        'cwp-starter-theme' => '4.0',
        'cwp-watea-theme' => '4.0',
        'silverstripe-advancedworkflow' => '6.1',
        'silverstripe-auditor' => '3.0',
        'silverstripe-blog' => '4.1',
        'silverstripe-composer-update-checker' => '4.0',
        'silverstripe-contentreview' => '5.1',
        'silverstripe-crontask' => '3.0',
        'silverstripe-developer-docs' => '5.1',
        'silverstripe-documentconverter' => '3.1',
        'silverstripe-dynamodb' => '5.0',
        'silverstripe-elemental' => '5.1',
        'silverstripe-elemental-bannerblock' => '3.1',
        'silverstripe-elemental-fileblock' => '3.1',
        'silverstripe-elemental-userforms' => '4.1',
        'silverstripe-environmentcheck' => '3.0',
        'silverstripe-externallinks' => '3.1',
        'silverstripe-fluent' => '7.0',
        'silverstripe-graphql' => '5.1',
        'silverstripe-gridfield-bulk-editing-tools' => '4.0',
        'silverstripe-gridfieldextensions' => '4.0',
        'silverstripe-gridfieldqueuedexport' => '3.1',
        'silverstripe-hybridsessions' => '3.0',
        'silverstripe-iframe' => '3.1',
        'silverstripe-ldap' => '2.1',
        'silverstripe-login-forms' => '5.1',
        'silverstripe-lumberjack' => '3.0',
        'silverstripe-maintenance' => '3.0',
        'silverstripe-mfa' => '5.1',
        'silverstripe-mimevalidator' => '3.0',
        'silverstripe-multivaluefield' => '6.0',
        'silverstripe-queuedjobs' => '5.0',
        'silverstripe-realme' => '5.2',
        'silverstripe-registry' => '3.1',
        'silverstripe-restfulserver' => '3.0',
        'silverstripe-securityreport' => '3.0',
        'silverstripe-segment-field' => '3.1',
        'silverstripe-session-manager' => '2.1',
        'silverstripe-sharedraftcontent' => '3.1',
        'silverstripe-simple' => '3.3',
        'silverstripe-sitewidecontent-report' => '4.1',
        'silverstripe-spamprotection' => '4.1',
        'silverstripe-staticpublishqueue' => '6.1',
        'silverstripe-subsites' => '3.1',
        'silverstripe-tagfield' => '3.1',
        'silverstripe-taxonomy' => '3.1',
        'silverstripe-textextraction' => '4.0',
        'silverstripe-totp-authenticator' => '5.1',
        'silverstripe-userforms' => '6.1',
        'silverstripe-vendor-plugin' => '2.0',
        'silverstripe-versionfeed' => '3.1',
        'silverstripe-webauthn-authenticator' => '5.1',
    ],
    '5.2' => [
        'cwp-agencyextensions' => '3.2',
        'cwp-starter-theme' => '4.1',
        'cwp-watea-theme' => '4.1',
        'recipe-plugin' => '2.0',
        'silverstripe-advancedworkflow' => '6.2',
        'silverstripe-auditor' => '3.1',
        'silverstripe-blog' => '4.2',
        'silverstripe-composer-update-checker' => '4.1',
        'silverstripe-contentreview' => '5.2',
        'silverstripe-crontask' => '3.0',
        'silverstripe-developer-docs' => '5.2',
        'silverstripe-documentconverter' => '3.2',
        'silverstripe-dynamodb' => '5.0',
        'silverstripe-elemental' => '5.2',
        'silverstripe-elemental-bannerblock' => '3.2',
        'silverstripe-elemental-fileblock' => '3.1',
        'silverstripe-elemental-userforms' => '4.1',
        'silverstripe-environmentcheck' => '3.0',
        'silverstripe-externallinks' => '3.2',
        'silverstripe-fluent' => '7.1',
        'silverstripe-graphql' => '5.2',
        'silverstripe-gridfield-bulk-editing-tools' => '4.0',
        'silverstripe-gridfieldextensions' => '4.0',
        'silverstripe-gridfieldqueuedexport' => '3.2',
        'silverstripe-hybridsessions' => '3.0',
        'silverstripe-iframe' => '3.2',
        'silverstripe-ldap' => '2.2',
        'silverstripe-linkfield' => '4.0',
        'silverstripe-login-forms' => '5.2',
        'silverstripe-lumberjack' => '3.1',
        'silverstripe-maintenance' => '3.1',
        'silverstripe-mfa' => '5.2',
        'silverstripe-mimevalidator' => '3.1',
        'silverstripe-multivaluefield' => '6.1',
        'silverstripe-queuedjobs' => '5.1',
        'silverstripe-realme' => '5.3',
        'silverstripe-registry' => '3.2',
        'silverstripe-restfulserver' => '3.0',
        'silverstripe-securityreport' => '3.1',
        'silverstripe-segment-field' => '3.2',
        'silverstripe-session-manager' => '2.2',
        'silverstripe-sharedraftcontent' => '3.2',
        'silverstripe-simple' => '3.3',
        'silverstripe-sitewidecontent-report' => '4.2',
        'silverstripe-spamprotection' => '4.2',
        'silverstripe-staticpublishqueue' => '6.2',
        'silverstripe-subsites' => '3.2',
        'silverstripe-tagfield' => '3.2',
        'silverstripe-taxonomy' => '3.2',
        'silverstripe-textextraction' => '4.1',
        'silverstripe-totp-authenticator' => '5.2',
        'silverstripe-userforms' => '6.2',
        'silverstripe-vendor-plugin' => '2.0',
        'silverstripe-versionfeed' => '3.2',
        'silverstripe-webauthn-authenticator' => '5.2',
    ],
    '5.3' => [
        'cwp-agencyextensions' => '3.3',
        'cwp-starter-theme' => '4.2',
        'cwp-watea-theme' => '4.2',
        'recipe-plugin' => '2.0',
        'silverstripe-advancedworkflow' => '6.3',
        'silverstripe-auditor' => '3.2',
        'silverstripe-blog' => '4.3',
        'silverstripe-composer-update-checker' => '4.1',
        'silverstripe-contentreview' => '5.3',
        'silverstripe-crontask' => '3.0',
        'silverstripe-developer-docs' => '5.3',
        'silverstripe-documentconverter' => '3.3',
        'silverstripe-dynamodb' => '5.0',
        'silverstripe-elemental' => '5.3',
        'silverstripe-elemental-bannerblock' => '3.3',
        'silverstripe-elemental-fileblock' => '3.1',
        'silverstripe-elemental-userforms' => '4.1',
        'silverstripe-environmentcheck' => '3.0',
        'silverstripe-externallinks' => '3.3',
        'silverstripe-fluent' => '7.2',
        'silverstripe-graphql' => '5.2',
        'silverstripe-gridfield-bulk-editing-tools' => '4.1',
        'silverstripe-gridfieldextensions' => '4.1',
        'silverstripe-gridfieldqueuedexport' => '3.3',
        'silverstripe-hybridsessions' => '3.0',
        'silverstripe-iframe' => '3.2',
        'silverstripe-ldap' => '2.2',
        'silverstripe-linkfield' => '4.1',
        'silverstripe-login-forms' => '5.3',
        'silverstripe-lumberjack' => '3.2',
        'silverstripe-maintenance' => '3.2',
        'silverstripe-mfa' => '5.3',
        'silverstripe-mimevalidator' => '3.1',
        'silverstripe-multivaluefield' => '6.1',
        'silverstripe-queuedjobs' => '5.2',
        'silverstripe-realme' => '5.4',
        'silverstripe-registry' => '3.2',
        'silverstripe-restfulserver' => '3.0',
        'silverstripe-securityreport' => '3.1',
        'silverstripe-segment-field' => '3.3',
        'silverstripe-session-manager' => '2.3',
        'silverstripe-sharedraftcontent' => '3.3',
        'silverstripe-simple' => '3.3',
        'silverstripe-sitewidecontent-report' => '4.3',
        'silverstripe-spamprotection' => '4.2',
        'silverstripe-staticpublishqueue' => '6.2',
        'silverstripe-subsites' => '3.3',
        'silverstripe-tagfield' => '3.3',
        'silverstripe-taxonomy' => '3.2',
        'silverstripe-textextraction' => '4.1',
        'silverstripe-totp-authenticator' => '5.3',
        'silverstripe-userforms' => '6.3',
        'silverstripe-vendor-plugin' => '2.0',
        'silverstripe-versionfeed' => '3.2',
        'silverstripe-webauthn-authenticator' => '5.3',
    ],
];
