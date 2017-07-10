
<h1>{{ title }}</h1>

{{ form("admin/tuto/add", "method": "post") }}

{{ text_field('name', "class": "form-control") }}
{{ text_area('editor', "id": "editor") }}
{{ submit_button('Send', "class": "btn btn-primary") }}

{{ end_form() }}

<script src="/js/editor.js"></script>