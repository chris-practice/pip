<?php
/**
 * @file
 * screening_pack_registration.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function screening_pack_registration_default_rules_configuration() {
  $items = array();
  $items['rules_registration_confirmation'] = entity_import('rules_config', '{ "rules_registration_confirmation" : {
      "LABEL" : "Registration Confirmation",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "rules", "registration" ],
      "ON" : { "registration_insert" : [] },
      "IF" : [
        { "entity_is_of_bundle" : {
            "entity" : [ "registration" ],
            "type" : "registration",
            "bundle" : { "value" : { "meeting_registration" : "meeting_registration" } }
          }
        }
      ],
      "DO" : [
        { "entity_fetch" : {
            "USING" : { "type" : "node", "id" : [ "registration:entity-id" ] },
            "PROVIDE" : { "entity_fetched" : { "entity_fetched" : "Fetched entity" } }
          }
        },
        { "mail" : {
            "to" : "[registration:anon-mail]",
            "subject" : "Thrombo 360 \\u2013 Registration Confirmation ",
            "message" : "\\u003Cdiv\\u003E\\u003Cstrong\\u003EDear\\u003C\\/strong\\u003E\\u0026nbsp; [registration:field-registrant-name] [registration:field-registrant-surname],\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003EThank you for registering for the following meeting:\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EDate: \\u003C\\/strong\\u003E[entity-fetched:meeting_date]\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EStart time: \\u003C\\/strong\\u003E[entity-fetched:field-meeting-time]\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EVenue: \\u003C\\/strong\\u003E[entity-fetched:field-venue-name]\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EAddress: \\u003C\\/strong\\u003E[registration:field-registrant-address]\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EActivity: \\u003C\\/strong\\u003E[entity-fetched:field-meeting-activity]\\u003C\\/div\\u003E\\u003Cbr\\/\\u003E\\r\\n\\u003Cdiv\\u003EYour login details for this meeting are provided below:\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EEmail:\\u003C\\/strong\\u003E[registration:anon-mail]\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EPassword:\\u003C\\/strong\\u003E[entity-fetched:title]\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cstrong\\u003EWebsite address: \\u003C\\/strong\\u003Ewww.thrombo360education.com.au\\u003C\\/div\\u003E\\u003Cbr\\/\\u003E\\r\\n\\u003Cdiv\\u003EKind Regards,\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003EThrombo 360\\u003C\\/div\\u003E\\r\\n\\u003Cdiv\\u003E\\u003Cimg src=\\u0022http:\\/\\/pfthromb360eduaudev.prod.acquia-sites.com\\/sites\\/default\\/themes\\/custom\\/paininpractice\\/images\\/logo.png\\u0022\\u003E\\u003Cimg src =\\u0022 http:\\/\\/pfthromb360eduaudev.prod.acquia-sites.com\\/sites\\/default\\/themes\\/custom\\/paininpractice\\/images\\/bristol-myers-logo.jpg\\u0022\\u003E\\u003C\\/div\\u003E; ",
            "from" : "Thrombo 360 Education \\u003Cno-reply@thrombo360education.com.au\\u003E",
            "language" : [ "" ]
          }
        }
      ]
    }
  }');
  return $items;
}
