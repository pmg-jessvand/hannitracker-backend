<?php

namespace Drupal\ht_mutations\Plugin\GraphQL\Mutations;

use Drupal\graphql\Annotation\GraphQLMutation;
use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql_core\Plugin\GraphQL\Mutations\Entity\UpdateEntityBase;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Simple mutation for updating an existing article node.
 *
 * @GraphQLMutation(
 *   id = "update_article",
 *   entity_type = "node",
 *   entity_bundle = "article",
 *   secure = true,
 *   name = "updateArticle",
 *   type = "EntityCrudOutput!",
 *   arguments = {
 *     "id" = "String",
 *     "input" = "ArticleInput"
 *   }
 * )
 */
class UpdateArticle extends UpdateEntityBase {

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
      'body' => $args['input']['body'],
    ]);
  }

}