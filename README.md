# Client URLs Project

## Motivation:

The goal of the code is to create a custom module which contains a custom field type in Drupal called "Client Url", which is a list of URLs from a text file in the module directory. The custom field should be installed on all content entities when the module is enabled, and should be locked so that users cannot remove it from an entity once it has been added. Additionally, we want to create a custom field widget for this field type that allows users to select multiple URLs from the list, and a custom field formatter that displays only the domain name of the URL.

## Get started:

- Enable the custom module "my_module". This will install the field "field_client_urls" and make it available for all the content types
- For the required content types, under "Manage form display" and "Manage display", drag and make the field visible

## Module structure:

my_module
  - config
  --install
  ---- yml file with the field information
  - src
  -- Plugin
  --- Field
  ---- FieldFormatter
  ----- custom field formatter file 
  ---- FieldType
  ----- custom field type file
  ---- FieldWidget
  ----- custom field widget file
  - module info file
  - module install file
  - urls.txt

## Project details:

- Drupal version: 9.5.5
- theme used: Olivero 9.5.5

## Local environment setup:

### To run the project on Lando:

- Make sure Docker and Lando are installed.
- In the project directory where .lando.yml is provided (no need to do a lando init), run the command lando start.
- This will be followed by Lando providing the appserver URL.
- To check the database credentials, run lando info.
- Troubleshoot: if facing any issue to run site, do a lando destroy && lando start. Check logs through lando logs -s.
