<?php

namespace Database\Seeders;

use App\Models\PageTexts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageTexts::create([
            "name" => "h1",
            "text" => "LUXURY CATERING AROUND THE WORLD",
            "type" => "title",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "under h1",
            "text" => "We are here to provide you the best quality catering service during your stay and departure",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "index about",
            "text" => "We are VIP inflight catering specialists working worldwide, with years of experience. We are here to provide you the best quality catering service during your stay and departure.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "Quality",
            "text" => "We are aware that
                                            it’s easy to make
                                            a mistake in the order because of the multicultural specificities in each
                                            country.
                                            As pancake in Russia and in England differ, we always take into
                                            consideration
                                            cultural background of each client in order to avoid misunderstanding and
                                            provide a “right pancake”.
                                            During the entire delivery process, we are meticulously checking your order
                                            and avoid any errors or
                                            complications.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "Cost",
            "text" => "We are aware that most
                                            of companies have
                                            limited budget for catering orders. Therefore, due to our long-lasting
                                            partnership with carefully
                                            selected worldwide partners we have negotiated prices for you. Our mission
                                            is to negotiate the best price
                                            on the market on your behalf.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "Network",
            "text" => "Our goal is to provide
                                            high standard
                                            quality catering service, thanks to our strong network of trusted worldwide
                                            partners. Each partner
                                            is carefully selected as we meticulously adhere to our client requirements
                                            to create the ultimate VIP
                                            experience.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "Analysis",
            "text" => "For our costumers we
                                            analyze all order
                                            details and help to reduce final fees and costs. This analysis helps us to
                                            optimize your savings for the most
                                            ordered items and we guarantee your highest satisfaction.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "Team",
            "text" => "Our team comes from
                                            catering units
                                            around the world, we are aware of all nuances in the ordering process and we
                                            take care of all details.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "Billing",
            "text" => "For our client we can
                                            simplify billing :
                                            - By CB for each order
                                            - By Destination (weekly billing)
                                            - By Aircraft (weekly billing)
                                            - By Period (weekly, monthly)",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "OUR PARTNERS",
            "text" => "We are VIP
                            inflight catering specialists working
                            worldwide, with
                            years of experience. We are here to provide you the best quality catering service during
                            your stay and
                            departure.",
            "type" => "text",
            "page" => "index",
        ]);

        PageTexts::create([
            "name" => "h1",
            "text" => "BECOME OUR LOCAL PARTNER",
            "type" => "title",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "under h1",
            "text" => "Ambassador it’ s the person who became a member of our close community.
We accept only Private Flight attendants.",
            "type" => "text",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "title 1",
            "text" => "Your benefits",
            "type" => "title",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "text 1",
            "text" => "You create your team and take benefits from them. You take benefits from your collaboration with us.We regularly propose online training sessions on different thematics",
            "type" => "text",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "title 2",
            "text" => "Your engagement",
            "type" => "title",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "text 2",
            "text" => "You represent us and speak about us. Give your feedback about your destination. We give % for the orders.",
            "type" => "text",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "title 3",
            "text" => "How become a partner of Dark Wing",
            "type" => "title",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "text 3",
            "text" => "The ambassador program is about to get started. We will announce it very soon.",
            "type" => "text",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "contact",
            "text" => 'To become our partner please reach out to us via<br>
                <a class="fw-bold p_lg lh-sm text-white" href="mailto:Order@darkwinginflight.com">Order@darkwinginflight.com</a>
                or just fill in the form below.',
            "type" => "text",
            "page" => "partnership",
        ]);

        PageTexts::create([
            "name" => "phone Ops",
            "text" => "+33638888695",
            "type" => "title",
            "page" => "contact",
        ]);

        PageTexts::create([
            "name" => "phone Main",
            "text" => "+442038087779",
            "type" => "title",
            "page" => "contact",
        ]);

        PageTexts::create([
            "name" => "WhatsApp",
            "text" => "+33638888695",
            "type" => "title",
            "page" => "contact",
        ]);

        PageTexts::create([
            "name" => "Email",
            "text" => "Order@darkwinginflight.com",
            "type" => "title",
            "page" => "contact",
        ]);

        PageTexts::create([
            "name" => "h1",
            "text" => "AIRPORTS",
            "type" => "title",
            "page" => "airports",
        ]);

        PageTexts::create([
            "name" => "under h1",
            "text" => "All the airports we work with are displayed here. For convenience, use the search bar",
            "type" => "title",
            "page" => "airports",
        ]);
    }
}
