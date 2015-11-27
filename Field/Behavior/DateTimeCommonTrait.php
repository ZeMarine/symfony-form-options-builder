<?php

namespace steevanb\FormUtils\Field\Behavior;

trait DateTimeCommonTrait
{
    use FormTypeTrait;
    use PlaceHolderTrait;
    use AutofocusTrait;

    /**
     * @param string $input
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/datetime.html#input
     */
    public function setInput($input)
    {
        return $this->setOption('input', $input);
    }

    /**
     * @param null|string $default
     * @return string
     */
    public function getInput($default = 'datetime')
    {
        return $this->getOption('input', $default);
    }

    /**
     * @param string $timezone
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#model-timezone
     */
    public function setModelTimezone($timezone)
    {
        return $this->setOption('model_timezone', $timezone);
    }

    /**
     * @return string
     */
    public function getModelTimezone()
    {
        return $this->getOption('model_timezone');
    }

    /**
     * @param string $viewTimezone
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#view-timezone
     */
    public function setViewTimezone($viewTimezone)
    {
        return $this->setOption('view_timezone', $viewTimezone);
    }

    /**
     * @return string
     */
    public function getViewTimezone()
    {
        return $this->getOption('view_timezone');
    }

    /**
     * @param string $widget
     * @return $this
     * @link http://symfony.com/doc/current/reference/forms/types/date.html#widget
     */
    public function setWidget($widget)
    {
        return $this->setOption('widget', $widget);
    }

    /**
     * @return string
     */
    public function getWidget()
    {
        return $this->getOption('widget');
    }
}