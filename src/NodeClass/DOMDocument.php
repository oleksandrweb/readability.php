<?php

namespace andreskrey\Readability\NodeClass;

class DOMDocument extends \DOMDocument
{
    use NodeClassTrait;

    public function __construct($version, $encoding)
    {
        parent::__construct($version, $encoding);

        $this->registerNodeClass('DOMAttr', DOMAttr::class);
        $this->registerNodeClass('DOMCdataSection', DOMCdataSection::class);
        $this->registerNodeClass('DOMCharacterData', DOMCharacterData::class);
        $this->registerNodeClass('DOMComment', DOMComment::class);
        $this->registerNodeClass('DOMDocument', self::class);
        $this->registerNodeClass('DOMDocumentFragment', DOMDocumentFragment::class);
        $this->registerNodeClass('DOMDocumentType', DOMDocumentType::class);
        $this->registerNodeClass('DOMElement', DOMElement::class);
        $this->registerNodeClass('DOMNode', DOMNode::class);
        $this->registerNodeClass('DOMNotation', DOMNotation::class);
        $this->registerNodeClass('DOMProcessingInstruction', DOMProcessingInstruction::class);
        $this->registerNodeClass('DOMText', DOMText::class);
    }
}
