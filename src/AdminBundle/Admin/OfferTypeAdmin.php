<?php
/**
 * Class OfferTypeAdmin
 *
 * @author Bogdan Dinu <bogdan.dinu@innobyte.com>
 */

namespace App\AdminBundle\Admin;

use App\AdminBundle\Entity\Category;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OfferTypeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->add('type', TextType::class);
        $formMapper->add('category', ModelType::class, [
            'class'         => Category::class,
            'property'      => 'name',
            'placeholder'   => "Select Category"
        ]
        );
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('type');
        $datagridMapper->add('category');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('type');
        $listMapper->addIdentifier('category');
    }
}