<?php

namespace Magestudy\Crud\Block\Adminhtml\Category;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;
use Magestudy\Crud\Block\Adminhtml\AbstractEdit;
use Magestudy\Crud\Helper\AclResources;
use Magestudy\Crud\Model\Category;

class Edit extends AbstractEdit
{
    /**
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $registry, $data);
    }

    /**
     * @return string
     */
    protected function _getDeleteAcl()
    {
        return AclResources::CATEGORY_DELETE;
    }

    /**
     * @return string
     */
    protected function _getSaveAcl()
    {
        return AclResources::CATEGORY_SAVE;
    }

    /**
     * @return string
     */
    protected function _getEntityTitle()
    {
        return Category::ENTITY_TITLE;
    }

    /**
     * @param Category $model
     * @return string
     */
    protected function _getTitle($model)
    {
        return $model->getTitle();
    }

    /**
     * @return string
     */
    protected function _getController()
    {
        return 'category';
    }

    /**
     * @return string
     */
    protected function _getId()
    {
        return Category::ID;
    }
}