<?php

namespace Database\Seeders;

use App\Models\Committee;
use Illuminate\Database\Seeder;

class CommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $committees = [
            [
                'name' => 'Architecture & Structural Review',
                'slug' => 'architecture-structural-review',
                'icon' => 'committees/icons/architecture.svg',
                'featured_image' => 'committees/featured/architecture.jpg',
                'purpose' => 'Ensuring the integrity, safety, and aesthetic of the Villa\'s structures and common areas.',
                'responsibilities' => "- Building Integrity: Review structural maintenance plans and major repair projects.\n\n- Aesthetic Standards: Oversee architectural consistency and resort-quality improvements.\n\n- Compliance: Ensure adherence to HOA guidelines and building codes.\n\n- Enhancements: Advise on updates that preserve and elevate property value.",
                'full_description' => 'This committee is dedicated to maintaining and enhancing the structural integrity and aesthetic appeal of Villa Capriani. From evaluating major repairs to recommending design improvements, this team ensures that all architectural decisions align with our long-term vision for a five-star resort experience.',
                'is_active' => true,
            ],
            [
                'name' => 'Technology, Marketing & Revenue',
                'slug' => 'technology-marketing-revenue',
                'icon' => 'committees/icons/technology.svg',
                'featured_image' => 'committees/featured/technology.jpg',
                'purpose' => 'Driving innovative solutions for improved owner experience, rental visibility, and community engagement.',
                'responsibilities' => "- Brand & Reputation: Maintain a strong, cohesive Villa brand and enhance its reputation as a top-tier destination.\n\n- Communication: Develop and manage digital tools for owner and guest engagement.\n\n- Revenue Strategies: Identify opportunities for rental optimization, trade partnerships, and sponsorships.\n\n- Systems & Website: Improve online visibility and ensure seamless digital experiences for owners and guests.",
                'full_description' => 'Focused on growth and sustainability, this committee oversees marketing strategies, revenue opportunities, and technological advancements. Whether it\'s refining our brand, optimizing rental visibility, or improving owner communications, TMR plays a critical role in shaping Villa Capriani\'s reputation and financial future.',
                'is_active' => true,
            ],
            [
                'name' => 'Bylaws & Governance Review',
                'slug' => 'bylaws-governance-review',
                'icon' => 'committees/icons/bylaws.svg',
                'featured_image' => 'committees/featured/bylaws.jpg',
                'purpose' => 'Keeping the Villa\'s governance strong, fair, and legally sound.',
                'responsibilities' => "- Policy Review: Ensure governing documents remain clear, updated, and aligned with community needs.\n\n- Legal Compliance: Ensure all policies adhere to state laws and HOA standards.\n\n- Governance Transparency: Maintain clarity in board and committee operations.",
                'full_description' => 'This committee safeguards the foundation of our community by ensuring that Villa Capriani\'s governing documents remain clear, fair, and aligned with our evolving needs. Through regular reviews and proposed updates, they help maintain a balanced and transparent framework for all owners.',
                'is_active' => true,
            ],
            [
                'name' => 'Grounds & Appearance',
                'slug' => 'grounds-appearance',
                'icon' => 'committees/icons/grounds.svg',
                'featured_image' => 'committees/featured/grounds.jpg',
                'purpose' => 'Enhancing and maintaining the Villa\'s resort-style look and feel.',
                'responsibilities' => "- Landscaping & Common Areas: Oversee the beauty and upkeep of Villa\'s outdoor spaces.\n\n- Resort-Level Standards: Ensure pools, pathways, and shared spaces meet luxury standards.\n\n- Aesthetic Enhancements: Propose upgrades that align with the Villa\'s branding and owner expectations.",
                'full_description' => 'Dedicated to the beauty and upkeep of Villa Capriani, this committee focuses on landscaping, lighting, exterior maintenance, and overall aesthetic improvements. Their goal is to create a resort-worthy environment that enhances both property values and the owner experience.',
                'is_active' => true,
            ],
            [
                'name' => 'Budget & Financial Review',
                'slug' => 'budget-financial-review',
                'icon' => 'committees/icons/budget.svg',
                'featured_image' => 'committees/featured/budget.jpg',
                'purpose' => 'Ensuring financial stability and responsible spending.',
                'responsibilities' => "- Financial Oversight: Review HOA financials and provide insight on budgeting priorities.\n\n- Proposal Evaluation: Work closely with other committees to assess funding needs for projects.\n\n- Insurance Cost Management: Explore strategies to optimize insurance coverage and control costs.\n\n- Long-Term Planning: Ensure financial decisions align with the Villa\'s strategic vision and reserve fund needs.",
                'full_description' => 'This committee plays a crucial role in ensuring financial responsibility and long-term stability. From reviewing expenditures and assessing revenue streams to advising on cost-saving initiatives—especially regarding rising insurance costs—this team works closely with other committees to provide financial insights and recommendations.',
                'is_active' => true,
            ],
            [
                'name' => 'Property Management Review',
                'slug' => 'property-management-review',
                'icon' => 'committees/icons/property.svg',
                'featured_image' => 'committees/featured/property.jpg',
                'purpose' => 'Ensuring Villa management and staff uphold community standards and deliver a 5-star experience.',
                'responsibilities' => "- Performance Review: Monitor and assess property management and staff operations.\n\n- Standards Compliance: Ensure the team upholds Villa policies and service expectations.\n\n- Contract & Service Review: Evaluate vendor and service agreements for efficiency.\n\n- Liaison Between the Board & PM/Staff: Facilitate communication and issue resolution.",
                'full_description' => 'Serving as a liaison between the property management team, staff, and the board, this committee ensures accountability and alignment with Villa Capriani\'s standards. From monitoring performance to addressing owner concerns, their role is to maintain high operational standards while fostering a positive working relationship between all parties.',
                'is_active' => true,
            ],
        ];

        foreach ($committees as $committee) {
            Committee::create($committee);
        }
    }
}
