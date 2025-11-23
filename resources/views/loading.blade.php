<style>
    img.loading {
        position: absolute;
        z-index: 9;
        width: 80px;
        top: 43%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<img style="width: 30px;" src="{{asset('public/loading.gif')}}" alt="" class="loading">
<script>
    window.addEventListener("load", (event) => {
        setTimeout(function (){
            document.querySelector('.loading').style.display='none';
        }, 600);
    });
</script>
