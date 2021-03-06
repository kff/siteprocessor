<?php
/**
 * @file
 * siteprocessor_event.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function siteprocessor_event_taxonomy_default_vocabularies() {
  return array(
    'event_category' => array(
      'name' => 'Event category',
      'machine_name' => 'event_category',
      'description' => 'Category for the event, i.e sports, music etc.',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
    'event_target' => array(
      'name' => 'Event target',
      'machine_name' => 'event_target',
      'description' => 'Target group for the event, i.e. adults, 0-3 year olds etc.',
      'hierarchy' => '0',
      'module' => 'taxonomy',
      'weight' => '0',
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
