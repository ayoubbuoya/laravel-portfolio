@props(['skills', 'projects'])
<section class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">My Latest Work</h2>
            <p class="subtitle">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi porro ipsa maiores minima atque. Ratione
                repellat eius aperiam recusandae deleniti pariatur eaque quasi iste dignissimos ducimus? Ipsum obcaecati
                iusto debitis.
            </p>
        </div>
    </div>
    <x-frontend.projects :skills="$skills" :projects="$projects" />
</section>
