<template>
    <section class="booking">
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
                        <input type="checkbox" id="make" name="purpose" value="Make your jewelry">
                        <span>Make your jewelry</span>
                    </label>
                    <label for="discover">
                        <input type="checkbox" id="discover" name="purpose" value="Discover our collections">
                        <span>Discover our collections</span>
                    </label>
                    <label for="care">
                        <input type="checkbox" id="care" name="purpose" value="Care service">
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
                        <input type="date" id="date" name="date">    
                    </label>
                    <label for="time">
                        Time
                        <input type="time" name="time" id="time">
                    </label>
                </div>
                <label for="comments">
                    Complementary Comments
                    <textarea name="comments" id="comments"></textarea>
                </label>
            </section>
            <section class="personalInfo">
                <h4>
                    Personal information
                </h4>
                <div>
                    <label for="fullName">
                        Name
                        <input type="text" name="fullName" id="fullName" placeholder="Your Full Name">
                    </label>
                    <label for="email">
                        Email
                        <input type="email" name="email" id="email" placeholder="Your Email">
                    </label>
                    <label for="phone">
                        Phone
                        <input type="tel" name="phone" id="phone" placeholder="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    </label>
                </div>
            </section>
            <input type="submit" value="Make an appointment">
        </form>
    </section>
</template>

<script>
export default {
    name: "BookingPage"
}
</script>