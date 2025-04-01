<x-public-layout>
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">Contact Us</h1>
                <p class="mt-4 text-xl text-gray-500">Get in touch with Villa Capriani</p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-2">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="mi-card">
                        <div class="mi-card-content">
                            <h3 class="mi-card-title">Location</h3>
                            <div class="mt-4 space-y-2 text-natural-50">
                                <p>Villa Capriani</p>
                                <p>2000 New River Inlet Road</p>
                                <p>North Topsail Beach, NC 28460</p>
                            </div>
                        </div>
                    </div>

                    <div class="mi-card">
                        <div class="mi-card-content">
                            <h3 class="mi-card-title">Contact Details</h3>
                            <div class="mt-4 space-y-4 text-natural-50">
                                <div>
                                    <div class="font-semibold">Front Desk</div>
                                    <p>(555) 123-4567</p>
                                </div>
                                <div>
                                    <div class="font-semibold">Restaurant</div>
                                    <p>(555) 123-4568</p>
                                </div>
                                <div>
                                    <div class="font-semibold">Email</div>
                                    <p>info@villacapriani.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mi-card">
                        <div class="mi-card-content">
                            <h3 class="mi-card-title">Hours</h3>
                            <div class="mt-4 space-y-2 text-natural-50">
                                <div class="flex justify-between">
                                    <span>Monday - Friday</span>
                                    <span>9:00 AM - 5:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Saturday</span>
                                    <span>10:00 AM - 4:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="mi-card">
                    <div class="mi-card-content">
                        <h3 class="mi-card-title mb-6">Send us a Message</h3>
                        <form action="{{ route('about.contact.send') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-natural-50">Name</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-natural-600 bg-base-700 text-natural-50 focus:border-primary-500 focus:ring-primary-500">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-natural-50">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-natural-600 bg-base-700 text-natural-50 focus:border-primary-500 focus:ring-primary-500">
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-natural-50">Subject</label>
                                <select name="subject" id="subject" class="mt-1 block w-full rounded-md border-natural-600 bg-base-700 text-natural-50 focus:border-primary-500 focus:ring-primary-500">
                                    <option value="general">General Inquiry</option>
                                    <option value="rental">Rental Information</option>
                                    <option value="sales">Sales Information</option>
                                    <option value="amenities">Amenities</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-natural-50">Message</label>
                                <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-natural-600 bg-base-700 text-natural-50 focus:border-primary-500 focus:ring-primary-500"></textarea>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="mi-button-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="mt-16">
                <div class="bg-white rounded-lg shadow-sm h-96">
                    <!-- Map component will be rendered here -->
                    @livewire('contact-map')
                </div>
            </div>
        </div>
    </div>
</x-public-layout>
