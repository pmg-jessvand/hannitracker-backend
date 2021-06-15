<?php

namespace Drupal\ht_mutations\Plugin\GraphQL\Mutations;

use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\UpdateEntityBase;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Simple mutation for updating an existing opdracht node.
 *
 * @GraphQLMutation(
 *   id = "update_task",
 *   entity_type = "node",
 *   entity_bundle = "opdracht",
 *   secure = true,
 *   name = "updateTask",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "id" = "String",
 *     "input" = "TaskInput"
 *   }
 * )
 */

class UpdateTask extends UpdateEntityBase {

  /**
   * {@inheritdoc}
   */
  protected function extractEntityInput(
    $value,
    array $args,
    ResolveContext $context,
    ResolveInfo $info
  ) {
    return array_filter([
      'title' => $args['input']['title'],
      'field_task_description' => $args['input']['field_task_description'],
      'field_task_estimated_time' => $args['input']['field_task_estimated_time'],
      'field_task_klant' => $args['input']['field_task_klant'],
      'field_task_project' => $args['input']['field_task_project'],
      'field_task_start_date' => $args['input']['field_task_start_date'],
      'field_task_total_time' => $args['input']['field_task_total_time'],
    ]);
  }

}