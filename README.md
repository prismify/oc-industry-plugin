# Industry plugin

This plugin adds a list of all industries to [OctoberCMS](http://octobercms.com).

* Easily add Industry to any model

### Add Industry to any model

    $table->integer('industry_id')->unsigned()->nullable()->index();
    
Then implement the **Prismify.Industry.Behaviors.IndustryModel** behavior in the model class:

    public $implement = ['Prismify.Industry.Behaviors.IndustryModel'];

This will automatically create two "belongs to" relationships:

**industry** - relation for Prismify\Industry\Models\Industry

### Back-end usage

#### Forms

You are free to add the following form field definitions:

    industry:
        label: Industry
        placeholder: -- select industry --
        type: dropdown
        span: left

#### Lists

For the list column definitions, you can use the following snippet:

     industry:
         label: Industry
         searchable: true
         relation: industry
         select: name
         sortable: false

#
### Like this plugin?

If you like this plugin, you can help me to develop it further, provide support for it a donation with [PayPal](https://paypal.me/sergeysukhorukov) or giving this plugin a good review.