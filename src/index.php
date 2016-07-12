<?PHP
// Loads all of the composer packages
require './_composer.php';

// Initialize an instance of the form builder as $builder.
$builder = new AdamWathan\Form\FormBuilder;

// Render a form post tag.
echo $builder->open()->action('/post.php') . "\n";

// Render a form input named email with a default value, and make it required.
echo "\t" . $builder->text('email')->value('example@example.com')->required() . "\n";

// Render a form input named password, and make it required.
echo "\t" . $builder->password('password')->addClass('required') . "\n";

// Render form submit button.
echo "\t" . $builder->submit() . "\n";

// Render closing form tag.
echo $builder->close() . "\n";

