<template>
    <section class="booking" v-on:submit.prevent="postBooking">
        <aside>
            <h3>
                Booking
            </h3>
        </aside>
        <form class="booking-form">
            <section class="purpose">
                <h4>
                    Purpose of your visit
                </h4>
                <div>
                    <label for="make">
                        <input type="radio" id="make" v-model.lazy="bookingObj.purpose" value="Make your jewelry">
                        <span>Make your jewelry</span>
                    </label>
                    <label for="discover">
                        <input type="radio" id="discover" v-model.lazy="bookingObj.purpose" value="Discover our collections">
                        <span>Discover our collections</span>
                    </label>
                    <label for="care">
                        <input type="radio" id="care" v-model.lazy="bookingObj.purpose" value="Care service">
                        <span>Care service</span>
                    </label>
                </div>
            </section>
            <section class="appointment">
                <h4>
                    Appointment details
                </h4>
                <div>
                    <label for="date">
                        Date
                        <input type="date" id="date" v-model.lazy="bookingObj.date">    
                    </label>
                    <label for="time">
                        Time
                        <input type="time" id="time" v-model.lazy="bookingObj.time">
                    </label>
                </div>
                <label for="comments">
                    Complementary Comments
                    <textarea id="comments" v-model.lazy="bookingObj.message"></textarea>
                </label>
            </section>
            <section class="personalInfo">
                <h4>
                    Personal information
                </h4>
                <div>
                    <label for="fullName">
                        Name
                        <input type="text" v-model.lazy="bookingObj.name" id="fullName" placeholder="Your Full Name">
                    </label>
                    <label for="email">
                        Email
                        <input type="email" v-model.lazy="bookingObj.email" id="email" placeholder="Your Email">
                    </label>
                    <label for="phone">
                        Phone
                        <input type="tel" v-model.lazy="bookingObj.phone" id="phone" placeholder="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    </label>
                </div>
            </section>
            <input type="submit" value="Make an appointment">
        </form>
    </section>
</template>

<script>
export default {
    name: "BookingPage",
    data() {
        return {
            bookingObj: {
                name: "",
                email: "",
                phone: "",
                date: "",
                time: "",
                purpose: "",
                message: "",
            },
        }
    },
    methods: {
        async postBooking() {
            console.log(this.bookingObj);
        try {
            await fetch(
            "http://localhost/final-jewelrylane/api/bookingApi/booking.php",
            {
                method: "POST",
                body: JSON.stringify(this.bookingObj)
            }
            ).then((response) => response.text()
            );
        } catch(error) {
            console.log(error);
        }
        },
    }
}
</script>