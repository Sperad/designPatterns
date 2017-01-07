<?php
namespace Test;

use design\Composite\Form;
use design\Composite\InputElement;
use design\Composite\TextElement;

class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $from = new Form();
        $from->addElement(new TextElement("Email:"));
        $from->addElement(new InputElement());

        $emebed = new Form();
        $emebed->addElement(new TextElement('Password:'));
        $emebed->addElement(new InputElement());

        $from->addElement($emebed);

        $this->assertEquals(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $from->render()
        );
    }
}
