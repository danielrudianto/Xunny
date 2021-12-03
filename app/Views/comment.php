<style>
    .commentButton{
        background-color:#FFB423;
        border-radius:20px;
        padding: 0.5rem 1.5rem;
        border:none;
        color:white;
        font-family:sans-serif;
        box-shadow:5px 3px 3px 3px rgba(0, 0, 0, 0.05);
        cursor:pointer;
        font-size:1.2rem;
    }

    .commentList{
        padding-left:0;
        width:100%;
        list-style-type: none;
        max-height:500px;
        overflow-y:auto;
    }

    .commentList .name{
        font-family:sans-serif;
        font-size:1.2rem;
        font-weight: 600;
        margin-bottom:0;
    }

    .commentList .website{
        font-family:sans-serif;
        font-size:1rem;
        font-weight:normal;
        margin-bottom:0;
        margin-top:0;
        color:#333;
        text-decoration: none;
    }

    .commentList .comment{
        font-family:sans-serif;
        font-size:1rem;
        font-weight:normal;
    }
</style>

<h4>Komentar</h4>
<p id='noComment'>Saat ini belum ada komentar</p>
<ul class='commentList'></ul>

<nav aria-label="Page navigation">
  <ul class="pagination">
  </ul>
</nav>
<form id='commentForm'>
    <input type='text' class='form-control mb-2' name='name' placeholder="Nama" required>
    <input type='url' class='form-control mb-2' name='website' placeholder="Website anda (Opsional)">
    <textarea class='form-control mb-2' id='comment' name='comment' placeholder='Komentar' minlength="10"></textarea>
    <button class='commentButton'>Tambahkan komentar anda</button>
</form>

<script>
    var page = 1;
    const monthName     = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    $(document).ready(function(){
        renderComments(<?= json_encode($comments) ?>);
        
        for(i = 1; i <= <?= max(1, ceil($commentsCount/10)) ?>; i++){
            $('.pagination').append(`<li class='page-item' id='page-${i}'><a class='page-link' onclick='getCommentsByPage(${i})'>${i}</a></li>`);
        }
    })

    function renderComments(comments){
        //First clear out the existing comments//
        $('.commentList').html("");
        if(comments.length > 0){
            $('#noComment').hide();
            $('.pagination').show();
            //This function is used to render comments obtained from database//
            $.each(comments, function(index, value){
                var date        = new Date(value.created_on);
                var day         = date.getDate();
                var month       = date.getMonth();
                var year        = date.getFullYear();
                if(value.website != null){
                    $('.commentList').append(`<li><p class='name'>${value.name}</p><a class='website' href='${value.website}' target='_blank' rel='noreferer'>${value.website}</a><p class='commentText'>${value.comment}</p><p class='text-right small'>${day} ${monthName[month]} ${year}</p><hr></li>`);
                } else {
                    $('.commentList').append(`<li><p class='name'>${value.name}</p><p class='commentText'>${value.comment}</p><hr></li>`);
                }
                
            })
        } else {
            $('#noComment').show();
            $('.pagination').hide();
        }
    }

    function getCommentsByPage(i){
        page = i;
        getComments();
    }

    function getComments(selectedPage = page){
        $.ajax({
            url:`<?= base_url() ?>/Blogs/Comment/<?= $header['id'] ?>/${page}`,
            beforeSend:function(){
                $('.page-item').attr('disabled', true);
            },
            success:function(response){
                renderComments(JSON.parse(response));
            },
            complete:function(){
                $('.page-item').attr('disabled', false);
                $('#page-' + selectedPage).attr('disabled', true);

                $('.pagination').scrollTop(0);
            }
        })
    }

    $('#commentForm').bind('submit', function(e){
        var data = $('#commentForm').serializeArray();
        data.push({name: 'blog', value:<?= $header['id'] ?>})
        $.ajax({
            url:"<?= site_url('Blogs/PostComment') ?>",
            data: data,
            type:"POST",
            beforeSend:function(){
                $('input, textarea').attr('readonly', true);
            },
            success:function(response){
                $('input, textarea').attr('readonly', false);
                if(response == 1){
                    getComments();
                }
            }
        })

        e.preventDefault();
        return false;
    });
</script>