<div class="mt-10 text-white text-lg">
    @foreach ($tweets as $tweet)
        <div>
            {{ $loop->index }} . {{ $tweet->body }}
        </div>
    @endforeach

    <div class="bg-blue-400 h-10 w-10" x-data="{
        infinityScrool() {
            const observer = new IntersectionObserver((items) => {
                items.forEach((item) => {
                    if(item.isIntersecting){
                        @this.loadMore();
                    }
                })
            }, {
                threshold: 0.5,
                rootMargin: '100px'
            })

            observer.observe(this.$el)
        }
    }" x-init="infinityScrool()">

    </div>
</div>
