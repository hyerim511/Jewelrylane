<template>
    <section class="about">
        <aside>
            <h3>
                About
            </h3>
        </aside>
        <figure class="about-figure">
            <img class="header-image" src="@/assets/img/about.jpeg" alt="About Us">
            <figcaption>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.
        
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.
                </p>
                <article>
                    <aside>
                        <h5>Address</h5>
                        <address>
                            {{ detail.address }}
                        </address>
                    </aside>
                    <aside>
                        <h5>Email</h5>
                        <a href="mailto:jewelryLane@mail.com">{{ detail.email }}</a>
                    </aside>
                    <aside>
                        <h5>Phone</h5>
                        <a href="tel:+16040000000">{{ detail.phone }}</a>
                    </aside>
                </article>
            </figcaption>
    </figure>
    </section>
</template>

<script>
    import { ref } from 'vue'
    export default {
        name: 'AboutPage',
        setup () {
            const detail = ref({
                address: '889 W Pender St #200, Vancouver, BC V6C 3B2',
                email: 'jewelryLane@mail.com',
                phone: '+1-604-000-0000'
            })

            return {
                detail
            }
        }
    }
</script>