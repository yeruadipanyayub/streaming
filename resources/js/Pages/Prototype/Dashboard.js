import Authenticated from "@/Layouts/Authenticated/Index";
import Flickity from "react-flickity-component";
import { Head } from "@inertiajs/inertia-react";
import FeaturedMovie from "@/Components/FeaturedMovie";
import MovieCard from "@/Components/MovieCard";

export default function Dashboard() {
    const flickityOptions = {
        "cellAlign": "left",
        "contain": true,
        "groupCells": 1,
        "wrapAround": false,
        "pageDots": false,
        "prevNextButtons": false,
        "draggable": ">1",
    }
    return <Authenticated>
        <Head>
            <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
            <title>Dashboard</title>
        </Head>
        <div>
            <div className="font-semibold text-[22px] text-black mb-4">Featured Movies</div>
            <Flickity className="gap-[30px]" options={flickityOptions}>
                {/* start featured movie list */}
                {[1, 2, 3, 4].map((i) => (
                    <FeaturedMovie
                        key={i}
                        slug={`the-batman-in-love-${i}`}
                        name={`The batman in love ${i}`}
                        category="Action"
                        thumbnail="/images/featured-1.png"
                        rating={i + 1}
                    />
                ))}
                {/* end featured movie list */}
            </Flickity>
        </div>
        {/* start browse movie */}
        <div className="mt-[50px]">
            <div className="font-semibold text-[22px] text-black mb-4">Browse</div>
            <Flickity className="gap-[30px]" options={flickityOptions}>
                {[1, 2, 3, 4, 5, 6].map((i) =>
                    <MovieCard
                        key={i}
                        slug={`golden-cat-${i}`}
                        name={`Golden Cat ${i}`}
                        category="Love"
                        thumbnail="/images/browse-1.png"
                    />
                )}
            </Flickity>
        </div>
        {/* end browse movie */}
    </Authenticated >
}