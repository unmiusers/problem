import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/problems")
public class ProblemController {

    @Autowired
    private ProblemService problemService;

    @PostMapping
    public Problem identifyProblem(@RequestBody String description) {
        return problemService.identifyProblem(description);
    }

    @GetMapping("/{id}")
    public Problem getProblem(@PathVariable Long id) {
        return problemService.getProblem(id);
    }

    // Other endpoints for updating, deleting, and listing problems
}