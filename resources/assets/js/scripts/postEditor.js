export default function () {
    if ($('#editor').length) {
        CKEDITOR.replace('editor', {
            extraPlugins: 'autoembed,embedsemantic,codesnippet',
            toolbar: [
                {name: 'styles', items: ['Format']},
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike']},
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
                },
                {name: 'links', items: ['Link', 'Unlink']},
                {name: 'insert', items: ['Image', 'EmbedSemantic', 'Table']},
                {name: 'tools', items: ['Maximize']},
                {name: 'others', items: ['Source']}
            ],
            skin: 'moono-lisa',
            bodyClass: 'article-editor',
            // Reduce the list of block elements listed in the Format dropdown to the most commonly used.
            format_tags: 'p;h1;h2;h3;pre',
            // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
            removeDialogTabs: 'image:advanced;link:advanced',
            height: 400,
            placeholder: 'Type content here...',
            contentsCss: ['/js/ckeditor/contents.css', '/css/app.css', '/css/blog.css'],
        });
    }

    if ($('#editor-simple').length) {
        CKEDITOR.replace('editor-simple', {
            toolbar: [
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike']},
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList']
                },
                {name: 'links', items: ['Link', 'Unlink']},
                {name: 'tools', items: ['Maximize']},
                {name: 'others', items: ['Source']}
            ],
            skin: 'moono-lisa',
            bodyClass: 'article-editor',
            height: 300,
            placeholder: 'Type content here...',
            contentsCss: ['/js/ckeditor/contents.css', '/css/app.css', '/css/blog.css']
        });
    }
}