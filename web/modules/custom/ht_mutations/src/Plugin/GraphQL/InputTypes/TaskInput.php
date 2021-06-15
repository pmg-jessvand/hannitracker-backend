<?php

namespace Drupal\ht_mutations\Plugin\GraphQL\InputTypes;

use Drupal\graphql\Plugin\GraphQL\InputTypes\InputTypePluginBase;

/**
 * The input type for article mutations.
 *
 * @GraphQLInputType(
 *   id = "task_input",
 *   name = "TaskInput",
 *   fields = {
 *     "title" = "String",
 *     "field_task_description" = {
 *        "type" = "String",
 *        "nullable" = "TRUE"
 *     },
 *     "field_task_estimated_time" = "Float",
 *     "field_task_klant" = "String",
 *     "field_task_project" = "String",
 *     "field_task_start_date" = "String",
 *     "field_task_total_time" = {
 *        "type" = "Float",
 *        "nullable" = "TRUE"
 *     }
 *   }
 * )
 */
class TaskInput extends InputTypePluginBase {

}