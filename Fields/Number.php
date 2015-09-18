<?php

namespace steevanb\FormUtils\Fields;

class Number extends AbstractField
{
    use Traits\FormType;
    use Traits\Grouping;
    use Traits\Scale;
    use Traits\RoundingMode;
    use Traits\PlaceHolder;
    use Traits\Autofocus;
}
