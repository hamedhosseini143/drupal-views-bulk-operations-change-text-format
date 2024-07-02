<?php

namespace Drupal\views_bulk_operations_change_text_format\Plugin\Action\Derivative;

use Drupal\Core\Action\Plugin\Action\Derivative\EntityActionDeriverBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\FieldableEntityInterface;
class EntityEditChangeTextFormatActionDeriver extends EntityActionDeriverBase {
  /**
   * {@inheritdoc}
   */
  protected function isApplicable(EntityTypeInterface $entity_type) {
    return $entity_type->entityClassImplements(FieldableEntityInterface::class);
  }
}
