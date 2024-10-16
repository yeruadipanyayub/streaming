import Authenticated from "@/Layouts/Authenticated/Index";
import SubscriptionCard from "@/Components/SubscriptionCard";
import { Inertia } from "@inertiajs/inertia";

export default function Subscription({ auth, plan }) {
    // general function
    const selectSubscription = id => {
        Inertia.post(
            // alert(id);
            route("user.dashboard.subscription.userSubscribe", {
                subscription: id,
            })
        );
    };

    return (
        <Authenticated auth={auth}>
            <div className="py-20 flex flex-col items-center">
                <div className="text-black font-semibold text-[26px] mb-3">
                    Pricing for Everyone
                </div>
                <p className="text-base text-gray-1 leading-7 max-w-[302px] text-center">
                    Invest your little money to get a whole new experiences from movies.
                </p>

                {/* start pricing card */}
                <div className="flex justify-center gap-10 mt-[70px]">
                    {plan.map((p) => (
                        <SubscriptionCard
                            name={p.name}
                            price={p.price}
                            durationInMonth={p.active_period_in_month}
                            features={JSON.parse(p.features)}
                            isPremium={p.name === "Premium"}
                            key={p.id}
                            onSelectSubscription={() => selectSubscription(p.id)}
                        />
                    ))}
                </div>
                {/* end pricing card */}
            </div>
        </Authenticated>
    )
}