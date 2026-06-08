<?php

declare(strict_types=1);

namespace ErdmannFreunde\SoloThemeBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Image\Studio\Studio;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(category: 'texts')]
class QuoteController extends AbstractContentElementController
{
    public function __construct(private readonly Studio $studio)
    {
    }

    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        $template->set('quote_text', $model->quote_text ?: '');
        $template->set('quote_author', $model->quote_author ?: '');

        $figure = !$model->addImage ? null : $this->studio
            ->createFigureBuilder()
            ->fromUuid($model->singleSRC ?: '')
            ->setSize($model->size)
            ->setOverwriteMetadata($model->getOverwriteMetadata())
            ->enableLightbox($model->fullsize)
            ->buildIfResourceExists()
        ;

        $template->set('image', $figure);
        $template->set('layout', $model->floating);

        return $template->getResponse();
    }
}
