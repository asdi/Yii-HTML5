Yii-HTML5
=========

Adds support for HTML5 custom input fields in Yii

* Works well with Yii Twig Renderer (https://github.com/yiiext/twig-renderer)

How to use
-------

* Put CHtml5.php in your web/protected/components/ directory.
* Now use CHtml5 in stead of CHtml if you want to use CHtml::inputField(); because CHtml5 makes this function a public static method.

With the Twig Renderer, you can just do this:

	{{ C.Html5.inputField('email', 'emailaddress', emailaddress, {'class': 'input', 'required': 'required'}) }}