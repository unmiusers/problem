import java.io.Serializable;
import java.util.Date;

public class Ticket implements Serializable {
    private String description;
    private Date occurrenceTime;
    private String impact;
    private TicketStatus status;

    public Ticket(String description, Date occurrenceTime, String impact) {
        this.description = description;
        this.occurrenceTime = occurrenceTime;
        this.impact = impact;
        this.status = TicketStatus.NEW;
    }

    // Getters and setters
}
