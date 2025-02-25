import "./bootstrap.js";
import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";

/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import "./styles/app.css";

console.log("This log comes from assets/app.js - welcome to AssetMapper! 🎉");

document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");

  const calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
    initialView: "dayGridMonth",
    events: "/rendezvous/events", // Endpoint to fetch events
    editable: true, // Allow drag-and-drop
    eventDrop: function (info) {
      updateEvent(info.event);
    },
    eventResize: function (info) {
      updateEvent(info.event);
    },
  });

  calendar.render();

  function updateEvent(event) {
    const eventData = {
      id: event.id,
      start: event.start.toISOString(),
      end: event.end ? event.end.toISOString() : null,
    };

    fetch("/rendezvous/update", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(eventData),
    });
  }
});
