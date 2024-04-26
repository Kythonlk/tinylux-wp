<?php
global $babylux_faq;
?>

<section class="bg-sky-100/80 py-4 sm:py-20 px-4 sm:px-20" id="contactus">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full sm:w-1/2 pr-8 mb-6 md:mb-0">
            <h2 class="text-3xl font-semibold mb-4">Contact Us</h2>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="space-y-4">
                <input type="hidden" name="action" value="submit_contact_form">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="form-input w-full rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="form-input w-full">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5" class="form-textarea w-full rounded-lg border border-input"></textarea>
                </div>
                <button type="submit" class="bg-white text-blue-600 px-4 py-2 border border-blue-400 rounded hover:bg-blue-600">Send Message</button>
            </form>
        </div>
        <div class="w-full sm:w-1/2 sm:px-8">
            <h2 class="text-3xl font-semibold mb-4">Contact Details</h2>
            <div class="space-y-4 px-4">
                <ul class="mb-6 md:mb-0">
                    <li class="flex">
                        <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-6 w-6">
                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                <path
                                    d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-4 mb-4">
                            <h3 class="mb-2 text-lg font-medium leading-6 text-blue-700">Our Address
                            </h3>
                            <p class="text-gray-600 ">Air Port Road, Al Nhayan</p>
                            <p class="text-gray-600 ">Abu Dhabi, UAE</p>
                        </div>
                    </li>
                    <li class="flex">
                        <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-6 w-6">
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                </path>
                                <path d="M15 7a2 2 0 0 1 2 2"></path>
                                <path d="M15 3a6 6 0 0 1 6 6"></path>
                            </svg>
                        </div>
                        <div class="ml-4 mb-4 flex flex-col gap-2">
                            <h3 class="text-lg font-medium leading-6 text-blue-700">Contact
                            </h3>
                            <p class="text-gray-600 ">Mobile: +971 56 821 0027</p>
                            <p class="text-gray-600 ">Mail: contact@babylux.ae</p>
                            <a href="https://wa.me/+971 56 821 0027" target="_blank">
                              <p class="text-gray-600 underline mb-2">Whatsapp: +971 56 821 0027</p>
                            </a>
                        </div>
                    </li>
                    <li class="flex">
                        <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-6 w-6">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                <path d="M12 7v5l3 3"></path>
                            </svg>
                        </div>
                        <div class="ml-4 mb-4">
                            <h3 class="mb-2 text-lg font-medium leading-6  text-blue-700">Working
                                hours</h3>
                            <p class="text-gray-600 ">Monday - Friday: a.m 08:00 - p.m 10:00</p>
                            <p class="text-gray-600 ">Saturday &amp; Sunday: a.m 08:00 - p.m 09:00</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
